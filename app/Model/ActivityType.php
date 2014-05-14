<?php
App::uses('AppModel', 'Model');
/**
 * ActivityType Model
 *
 */
class ActivityType extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'activityTypes';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
}
