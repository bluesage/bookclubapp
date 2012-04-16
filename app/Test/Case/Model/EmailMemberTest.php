<?php
App::uses('EmailMember', 'Model');

/**
 * EmailMember Test Case
 *
 */
class EmailMemberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.email_member', 'app.email', 'app.club', 'app.club_meeting', 'app.meeting', 'app.location', 'app.reading', 'app.book', 'app.author', 'app.club_selection', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmailMember = ClassRegistry::init('EmailMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailMember);

		parent::tearDown();
	}

}
