<?php
App::uses('ClubMeetingsController', 'Controller');

/**
 * TestClubMeetingsController *
 */
class TestClubMeetingsController extends ClubMeetingsController {
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
 * ClubMeetingsController Test Case
 *
 */
class ClubMeetingsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club_meeting');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubMeetings = new TestClubMeetingsController();
		$this->ClubMeetings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubMeetings);

		parent::tearDown();
	}

}
