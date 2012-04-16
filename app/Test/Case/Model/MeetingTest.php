<?php
App::uses('Meeting', 'Model');

/**
 * Meeting Test Case
 *
 */
class MeetingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.meeting', 'app.location', 'app.reading', 'app.club_meeting', 'app.email', 'app.club', 'app.club_selection', 'app.member', 'app.clubs_member', 'app.book', 'app.author', 'app.email_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Meeting = ClassRegistry::init('Meeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meeting);

		parent::tearDown();
	}

}
