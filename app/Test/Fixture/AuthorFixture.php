<?php
/**
 * AuthorFixture
 *
 */
class AuthorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'other_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'last_name' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'other_name' => 'Lorem ipsum dolor sit amet',
			'create_date' => '2012-04-13 22:31:47',
			'update_date' => '2012-04-13 22:31:47',
			'delete_date' => '2012-04-13 22:31:47'
		),
	);
}
