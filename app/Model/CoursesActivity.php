<?php
App::uses('AppModel', 'Model');
/**
 * CourseActivities Model
 *
 */
class CourseActivity extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $belongsTo = array(
        'Course', 'Activity'
    );
}
