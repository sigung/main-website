<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'PhpMailer', array('file' => 'phpmailer' . DS . 'PHPMailerAutoload.php'));
/**
 * Manuals Controller
 *
 * @property Manual $Manual
 * @property PaginatorComponent $Paginator
 */
class StudentsController extends AppController {
    public $uses = array('Manual', 'User', 'Role', 'Studio', 'UserRoleStudio', 'SystemProperty', 'Skill', 'SkillType', 'AnimalTechnique');
    public $helpers = array('User','Js' => array('Jquery'));
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('sendContactMessage');
        $this->layout = 'user';
    }

    public function isAuthorized($user) {
        $userRoleStudio = $this->UserRoleStudio->find('first', array('conditions'=>array('user_id'=>$user['id'])));
        if (count($userRoleStudio)>0) {
            if (in_array($this->action, array('learn', 'play', 'train', 'record', 'speed_drill', 'ajax_get_skills', 'addTechnique'))) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    public function learn() {
        $user = $this->User->find('first', array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
        $manuals = $this->getManualsWithAccess($user, false);
        $this->set('manuals', $manuals);
    }

    public function play() {}
    public function train() {}

    public function record() {
        $techniques = $this->AnimalTechnique->find('all', array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
        $this->set('techniques', $techniques);
    }

    public function addTechnique() {
        if ($this->request->is('post')) {
            $this->AnimalTechnique->create();
            if ($this->AnimalTechnique->save($this->request->data)) {
                $this->Session->setFlash(__('The technique has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The technique could not be saved. Please, try again.'));
            }
        }
        $this->redirect(array('controller'=>'students', 'action'=>'record'));
    }

    public function extra() {}

    public function sendContactMessage() {
        $contact_us_emails = array();
        $cue = $this->SystemProperty->findByName("contact_us_email");
        $contact_us_emails[] = $cue['SystemProperty']['value'];
        $contact_us_emails[] = $this->request->data['Contact']['studio'];
        $contact_info = $this->request->data['Contact']['contact_info'];
        $body = $this->request->data['Contact']['body'];

        if (strlen($this->request->data['Contact']['studio']) == 0) {
            $this->Session->setFlash(__("Please select the studio nearest to you and enter your email or phone so we can reach you."), 'default', array('class'=>'flasherrormsg'));
        }
        else if (strlen($contact_info) == 0) {
            $this->Session->setFlash(__("Please select the studio nearest to you and enter your email or phone so we can reach you."), 'default', array('class'=>'flasherrormsg'));
        }
        else if ($this->request->is('post')) {
            $this->sendEmail($contact_us_emails, "ShaolinArts Website Contact Form Submission", $this->request->data['Contact']['body']."\n\nContact Info:".$contact_info);
            $this->Session->setFlash(__("Thankyou."), 'default', array('class'=>'flashmsg'));
        }
        else {
            $this->log("There was a problem with the contact form email process.  Not a Post.");
        }
        $this->redirect(array('controller'=>'pages', 'action' => 'contact_us'));
    }

    public function speed_drill() {
        $this->layout = 'activity';
    }


    public function ajax_get_skills() {
        // set default class & message for setFlash
        $class = 'flash_bad';
        $msg   = 'Invalid List Id';

        // output JSON on AJAX request
        if($this->request->is('ajax')) {
            $user = $this->User->find('first', array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
            $skillsForStudent = $this->Skill->find('all', array('fields' => array('name_tiny','name'), 'conditions'=>array('skill_type_id'=>5, 'kung_fu_rank_id <='.$user['User']['kung_fu_rank_id']), 'order'=>'Skill.id ASC'));
            $this->set('skillsForStudent', $skillsForStudent);
            $this->autoRender = $this->layout = false;
            echo json_encode(array('skillsForStudent'=>($skillsForStudent)));
            exit;
        }

        // set flash message & redirect
        $this->Session->setFlash($msg,'default',array('class'=>$class));
        $this->redirect(array('action'=>'index'));
    }
}