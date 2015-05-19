<?php
App::uses('AppController', 'Controller');
class AdminPagesController extends AppController {
    public $uses = array('User', 'Role', 'Studio', 'UserRoleStudio');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
    }

    public function isAuthorized($user) {
        if ($this->isAuthorizedByRole($user, array('admin_home'), $this->INSMANAGER)) return true;
        return parent::isAdmin($user);
    }

    function admin_home() {

    }
}
?>