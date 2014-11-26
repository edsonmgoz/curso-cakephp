<?php
App::uses('CategoriaPlatillo', 'Model');

/**
 * CategoriaPlatillo Test Case
 *
 */
class CategoriaPlatilloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria_platillo',
		'app.platillo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriaPlatillo = ClassRegistry::init('CategoriaPlatillo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriaPlatillo);

		parent::tearDown();
	}

}
