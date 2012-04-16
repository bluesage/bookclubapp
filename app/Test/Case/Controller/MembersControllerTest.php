<?php
App::uses('MembersController', 'Controller');

/**
 * TestMembersController *
 */
class TestMembersController extends MembersController {
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
 * MembersController Test Case
 *
 */
class MembersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.member', 'app.email_member', 'app.club', 'app.club_meeting', 'app.club_selection', 'app.email', 'app.book', 'app.author', 'app.reading', 'app.meeting', 'app.location', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Members = new TestMembersController();
		$this->Members->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Members);

		parent::tearDown();
	}

}
