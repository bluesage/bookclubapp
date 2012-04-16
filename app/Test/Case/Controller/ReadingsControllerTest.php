<?php
App::uses('ReadingsController', 'Controller');

/**
 * TestReadingsController *
 */
class TestReadingsController extends ReadingsController {
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
 * ReadingsController Test Case
 *
 */
class ReadingsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.reading', 'app.club', 'app.club_meeting', 'app.club_selection', 'app.email', 'app.book', 'app.author', 'app.meeting', 'app.location', 'app.email_member', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Readings = new TestReadingsController();
		$this->Readings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Readings);

		parent::tearDown();
	}

}
