<?php
App::uses('Club', 'Model');

/**
 * Club Test Case
 *
 */
class ClubTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club', 'app.club_meeting', 'app.club_selection', 'app.email', 'app.reading', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Club = ClassRegistry::init('Club');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Club);

		parent::tearDown();
	}

}
