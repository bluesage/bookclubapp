<?php
/**
 * EmailMemberFixture
 *
 */
class EmailMemberFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'email_member';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'email_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'sent' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
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
			'email_id' => 1,
			'member_id' => 1,
			'sent' => 1,
			'create_date' => '2012-04-13 23:15:56',
			'update_date' => '2012-04-13 23:15:56',
			'delete_date' => '2012-04-13 23:15:56'
		),
	);
}
