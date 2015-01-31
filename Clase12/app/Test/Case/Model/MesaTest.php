<?php
App::uses('Mesa', 'Model');

/**
 * Mesa Test Case
 *
 */
class MesaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mesa',
		'app.mesero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mesa = ClassRegistry::init('Mesa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mesa);

		parent::tearDown();
	}

}
