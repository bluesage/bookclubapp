<?php
App::uses('ClubsMember', 'Model');

/**
 * ClubsMember Test Case
 *
 */
class ClubsMemberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clubs_member', 'app.club', 'app.club_meeting', 'app.meeting', 'app.location', 'app.reading', 'app.book', 'app.author', 'app.club_selection', 'app.email', 'app.email_member', 'app.member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubsMember = ClassRegistry::init('ClubsMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubsMember);

		parent::tearDown();
	}

}
