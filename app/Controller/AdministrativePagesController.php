<?php
App::uses('AppController', 'Controller');
class AdministrativePagesController extends AppController {
    public $uses = array('User', 'Role', 'Studio', 'UserRoleStudio');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
    }

    public function isAuthorized($user) {
        if ($this->isAuthorizedByRole($user, array('home'), $this->INSMANAGER)) return true;
        return parent::isAdmin($user);
    }

    public function home() {

    }
}
?>