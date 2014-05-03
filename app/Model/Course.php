<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property Section $Section
 */
class Course extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'course_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => array('Section.number' => 'asc'),
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        public $validate = array(
            'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '**You must fill in a title!',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
       public $hasAndBelongsToMany = array(
		'Resource' => array(
			'className' => 'Resource',
			'joinTable' => 'courses_resources',
			'foreignKey' => 'course_id',
			'associationForeignKey' => 'resource_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
