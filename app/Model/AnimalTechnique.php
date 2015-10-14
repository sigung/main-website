<?php
class AnimalTechnique extends AppModel {

     var $belongsTo = array('User');

     public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please provide a name for this technique.'
            )
        ),
    );
    }
?>