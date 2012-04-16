<?php
/**
 * MeetingFixture
 *
 */
class MeetingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'datetime' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'reading_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
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
			'location_id' => 1,
			'datetime' => '2012-04-13 22:55:31',
			'reading_id' => 1,
			'create_date' => '2012-04-13 22:55:31',
			'update_date' => '2012-04-13 22:55:31',
			'delete_date' => '2012-04-13 22:55:31'
		),
	);
}
