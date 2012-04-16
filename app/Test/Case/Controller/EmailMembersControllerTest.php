<?php
App::uses('EmailMembersController', 'Controller');

/**
 * TestEmailMembersController *
 */
class TestEmailMembersController extends EmailMembersController {
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
 * EmailMembersController Test Case
 *
 */
class EmailMembersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.email_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmailMembers = new TestEmailMembersController();
		$this->EmailMembers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailMembers);

		parent::tearDown();
	}

}
