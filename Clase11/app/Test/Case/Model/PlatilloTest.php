<?php
App::uses('Platillo', 'Model');

/**
 * Platillo Test Case
 *
 */
class PlatilloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.platillo',
		'app.categoria_platillo',
		'app.cocinero',
		'app.cocineros_platillo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Platillo = ClassRegistry::init('Platillo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Platillo);

		parent::tearDown();
	}

}
