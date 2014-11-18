<?php
App::uses('Mesero', 'Model');

/**
 * Mesero Test Case
 *
 */
class MeseroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mesero',
		'app.mesa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mesero = ClassRegistry::init('Mesero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mesero);

		parent::tearDown();
	}

}
