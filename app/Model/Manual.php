<?php
App::uses('AppModel', 'Model');
class Manual extends AppModel {

	public $displayField = 'name';

    public $belongsTo = array(
        'KungFuRank', 'TaiChiRank'
    );

	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
	);
}
