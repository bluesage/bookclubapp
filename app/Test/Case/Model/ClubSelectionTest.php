<?php
App::uses('ClubSelection', 'Model');

/**
 * ClubSelection Test Case
 *
 */
class ClubSelectionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.club_selection', 'app.club', 'app.club_meeting', 'app.meeting', 'app.location', 'app.reading', 'app.book', 'app.author', 'app.email', 'app.email_member', 'app.member', 'app.clubs_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubSelection = ClassRegistry::init('ClubSelection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubSelection);

		parent::tearDown();
	}

}
