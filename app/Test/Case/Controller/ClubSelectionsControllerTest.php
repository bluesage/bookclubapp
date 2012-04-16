<?php
App::uses('ClubSelectionsController', 'Controller');

/**
 * TestClubSelectionsController *
 */
class TestClubSelectionsController extends ClubSelectionsController {
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
 * ClubSelectionsController Test Case
 *
 */
class ClubSelectionsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club_selection');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubSelections = new TestClubSelectionsController();
		$this->ClubSelections->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubSelections);

		parent::tearDown();
	}

}
