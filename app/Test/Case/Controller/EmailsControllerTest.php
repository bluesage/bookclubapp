<?php
App::uses('EmailsController', 'Controller');

/**
 * TestEmailsController *
 */
class TestEmailsController extends EmailsController {
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
 * EmailsController Test Case
 *
 */
class EmailsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.email', 'app.club', 'app.club_meeting', 'app.club_selection', 'app.reading', 'app.book', 'app.author', 'app.meeting', 'app.location', 'app.member', 'app.email_member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Emails = new TestEmailsController();
		$this->Emails->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Emails);

		parent::tearDown();
	}

}
