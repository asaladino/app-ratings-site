<?php
App::uses('App', 'Model');

/**
 * App Test Case
 *
 */
class AppTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->App = ClassRegistry::init('App');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->App);

		parent::tearDown();
	}

}
