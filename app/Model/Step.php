<?php
App::uses('AppModel', 'Model');
/**
 * Step Model
 *
 * @property Activity $Activity
 */
class Step extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'precedureStep';

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
        
        public function duplicate($id = null) {
            $row = $this->find('all', array('conditions'=>array('Step.id'=>$id)));
            $this->create();
            $this->save($row);
        }
}
