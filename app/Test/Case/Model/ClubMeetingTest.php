<?php
App::uses('ClubMeeting', 'Model');

/**
 * ClubMeeting Test Case
 *
 */
class ClubMeetingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club_meeting', 'app.club', 'app.club_selection', 'app.email', 'app.book', 'app.author', 'app.reading', 'app.meeting', 'app.location', 'app.email_member', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubMeeting = ClassRegistry::init('ClubMeeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubMeeting);

		parent::tearDown();
	}

}
