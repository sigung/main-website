<?php
App::uses('AppController', 'Controller');
/**
 * Studios Controller
 *
 * @property Studio $Studio
 * @property PaginatorComponent $Paginator
 */
class StudiosController extends AppController {

    public $uses = array('User', 'UserRoleStudio', 'Studio');

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
		$this->set('studios', $this->Studio->find('all'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studio->create();
			if ($this->Studio->save($this->request->data)) {
				$this->Session->setFlash(__('The studio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studio could not be saved. Please, try again.'));
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
		if (!$this->Studio->exists($id)) {
			throw new NotFoundException(__('Invalid studio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studio->save($this->request->data)) {
				$this->Session->setFlash(__('The studio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studio.' . $this->Studio->primaryKey => $id));
			$this->request->data = $this->Studio->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Studio->id = $id;
		if (!$this->Studio->exists()) {
			throw new NotFoundException(__('Invalid studio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Studio->delete()) {
			$this->Session->setFlash(__('The studio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
