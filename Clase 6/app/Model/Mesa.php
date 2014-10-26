<?php
class Mesa extends AppModel
{
	public $belongsTo = array(
			'Mesero' => array(
				'className' => 'Mesero',
				'foreignKey' => 'mesero_id'
			)
		);

	public $validate = array(
		'serie' => array(
				'notEmpty' => array(
					'rule' => 'notEmpty'
				),
				'numeric' => array(
					'rule' => 'numeric',
					'message' => 'Solo números'
				),
				'unique' => array(
					'rule' => 'isUnique',
					'message' => 'La serie de Mesa debe ser único'
				)
			),
		'puestos' => array(
				'notEmpty' => array(
					'rule' => 'notEmpty'
				),
				'numeric' => array(
					'rule' => 'numeric',
					'message' => 'Solo números'
				),
			),
		'posicion' => array(
				'rule' => 'notEmpty'
			)
		);
}
?>