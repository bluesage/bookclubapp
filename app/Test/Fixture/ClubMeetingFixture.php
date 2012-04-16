<?php
/**
 * ClubMeetingFixture
 *
 */
class ClubMeetingFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'club_meeting';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'club_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'meeting_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'create_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'update_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'delete_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'club_id' => 1,
			'meeting_id' => 1,
			'create_date' => '2012-04-13 23:14:20',
			'update_date' => '2012-04-13 23:14:20',
			'delete_date' => '2012-04-13 23:14:20'
		),
	);
}
