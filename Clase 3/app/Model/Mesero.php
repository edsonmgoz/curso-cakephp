<?php
class Mesero extends AppModel
{
	public $validate = array(
			'dni' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'numeric' => array(
							'rule' => 'numeric',
							'message' => 'Solo números'
						)
				),
			'nombre' => array(
					'rule' => 'notEmpty'
				),
			'apellido' => array(
					'rule' => 'notEmpty'
				),
			'telefono' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'numeric' => array(
							'rule' => 'numeric',
							'message' => 'Solo números'
						)
				),
		);


}
?>