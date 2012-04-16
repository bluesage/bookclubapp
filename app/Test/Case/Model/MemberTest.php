<?php
App::uses('Member', 'Model');

/**
 * Member Test Case
 *
 */
class MemberTestCase extends CakeTestCase {
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
		$this->Member = ClassRegistry::init('Member');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Member);

		parent::tearDown();
	}

}
