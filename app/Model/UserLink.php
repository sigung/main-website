<?php
App::uses('AppModel', 'Model');
class UserLink extends AppModel {

	public $displayField = 'name';

	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'link' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
	);
}
