<?php
App::uses('AppHelper', 'View/Helper');

class UserHelper extends AppHelper {
    public $STUDENT = array(1);
    public $INSTRUCTOR = array(2);
    public $INSTRUCTORS_COLLEGE = array(3);
    public $OFFICE_MANAGER = array(4);
    public $DISTRICT_MANAGER = array(5);
    public $ADMIN = array(10);
    public $MANAGER = array(4,5,10);

    public function isOfThisType($id, $types) {
        App::import("Model", "UserRoleStudio");
        $model = new UserRoleStudio();
        $userRoleCount = $model->find("count", array('conditions'=>array('user_id'=>$id, 'role_id'=>$types)));
        if ($userRoleCount > 0) {
            return true;
        }
        return false;
    }
}