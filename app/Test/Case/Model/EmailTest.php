<?php
App::uses('Email', 'Model');

/**
 * Email Test Case
 *
 */
class EmailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.email', 'app.club', 'app.club_meeting', 'app.club_selection', 'app.reading', 'app.member', 'app.clubs_member', 'app.book', 'app.author', 'app.meeting', 'app.email_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Email = ClassRegistry::init('Email');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Email);

		parent::tearDown();
	}

}
