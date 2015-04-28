<?php
App::uses('AppController', 'Controller');
/**
 * Skills Controller
 *
 * @property Skill $Skill
 * @property PaginatorComponent $Paginator
 */
class SkillsController extends AppController {

     public $uses = array('User', 'UserRoleStudio', 'Skill', 'SkillType', 'KungFuRank', 'TaiChiRank');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'user_admin';
    }

    public function isAuthorized($user) {
        return parent::isAdmin($user);
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $this->set('skills', $this->Skill->find('all', array('order'=>'display_order asc')));
	    $this->set('skillTypes', $this->SkillType->find('all'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Skill->create();
			if (isset($this->request->data['SkillType']) && "0" === $this->request->data['SkillType']['id']) {
                $this->request->data['SkillType'] = null;
            }
            if (isset($this->request->data['KungFuRank']) && ("0" === $this->request->data['KungFuRank']['id'] || empty($this->request->data['KungFuRank']['id']))) {
                $this->request->data['KungFuRank'] = null;
            }
            if (isset($this->request->data['KungFuRank']) && ("0" === $this->request->data['TaiChiRank']['id'] || empty($this->request->data['TaiChiRank']['id']))) {
                $this->request->data['TaiChiRank'] = null;
            }

			if ($this->Skill->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The skill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.'));
			}
		}
		$skillTypeInfo = $this->SkillType->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $kungFuData = $this->KungFuRank->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $taiChiData = $this->TaiChiRank->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $this->set('skillTypes', $skillTypeInfo);
        $this->set('kungFuRanks', $kungFuData);
        $this->set('taiChiRanks', $taiChiData);
	}

/**
 * add method
 *
 * @return void
 */
	public function addType() {
		if ($this->request->is('post')) {
			$this->SkillType->create();
			if ($this->SkillType->save($this->request->data)) {
				$this->Session->setFlash(__('The skill type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill type could not be saved. Please, try again.'));
			}
		}
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Skill->exists($id)) {
			throw new NotFoundException(__('Invalid skill'));
		}
		if ($this->request->is(array('post', 'put'))) {
            if (isset($this->request->data['SkillType']) && "0" === $this->request->data['SkillType']['id']) {
                $this->request->data['SkillType'] = null;
            }
            if (isset($this->request->data['KungFuRank']) && ("0" === $this->request->data['KungFuRank']['id'] || empty($this->request->data['KungFuRank']['id']))) {
                $this->request->data['KungFuRank'] = null;
            }
            if (isset($this->request->data['KungFuRank']) && ("0" === $this->request->data['TaiChiRank']['id'] || empty($this->request->data['TaiChiRank']['id']))) {
                $this->request->data['TaiChiRank'] = null;
            }
			if ($this->Skill->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The skill has been saved.'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.'));
				return $this->redirect(array('action' => 'edit', $id));
			}
		} else {
			$options = array('conditions' => array('Skill.' . $this->Skill->primaryKey => $id));
			$this->request->data = $this->Skill->find('first', $options);
		}

        $skillTypeInfo = $this->SkillType->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $kungFuData = $this->KungFuRank->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $taiChiData = $this->TaiChiRank->find('list', array('fields' => array('id', 'name'),'order'=>'id ASC'));
        $this->set('skillTypes', $skillTypeInfo);
        $this->set('kungFuRanks', $kungFuData);
        $this->set('taiChiRanks', $taiChiData);
	}


	public function editType($id = null) {
		if (!$this->SkillType->exists($id)) {
			throw new NotFoundException(__('Invalid skill'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SkillType->save($this->request->data)) {
				$this->Session->setFlash(__('The skill type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SkillType.' . $this->SkillType->primaryKey => $id));
			$this->request->data = $this->SkillType->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Skill->id = $id;
		if (!$this->Skill->exists()) {
			throw new NotFoundException(__('Invalid skill'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Skill->delete()) {
			$this->Session->setFlash(__('The skill has been deleted.'));
		} else {
			$this->Session->setFlash(__('The skill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    	public function deleteType($id = null) {
    		$this->SkillType->id = $id;
    		if (!$this->SkillType->exists()) {
    			throw new NotFoundException(__('Invalid skill type'));
    		}
    		$this->request->onlyAllow('post', 'delete');
    		if ($this->SkillType->delete()) {
    			$this->Session->setFlash(__('The skill type has been deleted.'));
    		} else {
    			$this->Session->setFlash(__('The skill type could not be deleted. Please, try again.'));
    		}
    		return $this->redirect(array('action' => 'index'));
    	}

}
