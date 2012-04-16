<?php
App::uses('ClubsMembersController', 'Controller');

/**
 * TestClubsMembersController *
 */
class TestClubsMembersController extends ClubsMembersController {
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
 * ClubsMembersController Test Case
 *
 */
class ClubsMembersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubsMembers = new TestClubsMembersController();
		$this->ClubsMembers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubsMembers);

		parent::tearDown();
	}

}
