<?php
App::uses('AppModel', 'Model');
/**
 * Sensor Model
 *
 */
class Sensor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sensor' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
