<?php
App::uses('AppModel', 'Model');
/**
 * Discussion Model
 *
 * @property Activity $Activity
 * @property Section $Section
 */
class Discussion extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'activity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
