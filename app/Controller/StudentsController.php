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
    public $uses = array('Manual', 'User', 'Role', 'Studio', 'UserRoleStudio', 'SystemProperty');
    public $helpers = array('User','Js' => array('Jquery'));
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('sendContactMessage');
        $this->layout = 'user';
    }

    public function isAuthorized($user) {
        $userRoleStudio = $this->UserRoleStudio->find('first', array('conditions'=>array('user_id'=>$user['id'])));
        if (count($userRoleStudio)>0) {
            if (in_array($this->action, array('learn', 'play', 'train', 'record'))) {
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
    public function record() {}
    public function extra() {}

    public function sendContactMessage() {
        $contact_us_emails = array();
        $contact_us_emails[] = $this->SystemProperty->findByName("contact_us_email")['SystemProperty']['value'];
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
}