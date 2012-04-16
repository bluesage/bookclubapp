<?php
App::uses('AppModel', 'Model');
/**
 * ClubMeeting Model
 *
 * @property Club $Club
 * @property Meeting $Meeting
 */
class ClubMeeting extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'club_meeting';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'club_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Meeting' => array(
			'className' => 'Meeting',
			'foreignKey' => 'meeting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
