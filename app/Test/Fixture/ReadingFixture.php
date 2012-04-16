<?php
/**
 * ReadingFixture
 *
 */
class ReadingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'club_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'book_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'create_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'update_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'delete_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'from_page' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'to_page' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'from_chapter' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'to_chapter' => array('type' => 'integer', 'null' => true, 'default' => NULL),
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
			'book_id' => 1,
			'create_date' => '2012-04-13 22:57:51',
			'update_date' => '2012-04-13 22:57:51',
			'delete_date' => '2012-04-13 22:57:51',
			'from_page' => 1,
			'to_page' => 1,
			'from_chapter' => 1,
			'to_chapter' => 1
		),
	);
}
