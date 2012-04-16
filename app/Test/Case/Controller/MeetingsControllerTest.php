<?php
App::uses('MeetingsController', 'Controller');

/**
 * TestMeetingsController *
 */
class TestMeetingsController extends MeetingsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * MeetingsController Test Case
 *
 */
class MeetingsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.meeting', 'app.location', 'app.reading', 'app.club', 'app.club_meeting', 'app.club_selection', 'app.email', 'app.book', 'app.author', 'app.email_member', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Meetings = new TestMeetingsController();
		$this->Meetings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meetings);

		parent::tearDown();
	}

}
