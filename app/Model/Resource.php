<?php
App::uses('AppModel', 'Model');
/**
 * Resource Model
 *
 * @property Type $Type
 * @property Activity $Activity
 * @property Course $Course
 * @property Section $Section
 */
class Resource extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => array(1,2,4,6,8,9,10,11,12,14),
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Activity' => array(
			'className' => 'Activity',
			'joinTable' => 'activities_resources',
			'foreignKey' => 'resource_id',
			'associationForeignKey' => 'activity_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'courses_resources',
			'foreignKey' => 'resource_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Section' => array(
			'className' => 'Section',
			'joinTable' => 'resources_sections',
			'foreignKey' => 'resource_id',
			'associationForeignKey' => 'section_id',
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
       
        public $videos;
        
        public function returnBCArray($search) {
            $searchquery = str_replace(' ', '%20', $search);
            $apiendpoint = 'http://api.brightcove.com/services/library?command=search_videos&any='.$searchquery.'&page_size=100&video_fields=id%2Cname%2CshortDescription%2ClongDescription%2CvideoStillURL%2Clength&media_delivery=default&sort_by=DISPLAY_NAME%3AASC&page_number=0&get_item_count=true&callback=BCL.onSearchResponse&token=Bc_rX0PVJLx9Qis1edG-sSPth3WWA1ggjkLXHF48xgyAJtQMbpLHZg..';
            $json = file_get_contents($apiendpoint); //{"courseintro":"This is a new description.","sessions":[null]}
            $json2 = substr($json, 21);
            $json = substr($json2, 0, -2);
            $json = utf8_encode($json);
            $bcfeed = json_decode($json, true);
            $this->videos = $bcfeed['items'];//$bcfeed['items'];
        }

}
