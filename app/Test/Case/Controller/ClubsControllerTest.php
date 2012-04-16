<?php
App::uses('ClubsController', 'Controller');

/**
 * TestClubsController *
 */
class TestClubsController extends ClubsController {
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
 * ClubsController Test Case
 *
 */
class ClubsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club', 'app.club_meeting', 'app.club_selection', 'app.email', 'app.book', 'app.author', 'app.reading', 'app.meeting', 'app.location', 'app.email_member', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clubs = new TestClubsController();
		$this->Clubs->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clubs);

		parent::tearDown();
	}

}
