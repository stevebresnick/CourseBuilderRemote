<?php
App::uses('AppModel', 'Model');
/**
 * Overview Model
 *
 * @property Section $Section
 */
class Overview extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'paragraph';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
