<?php
class Mesa extends AppModel
{
	public $belongsTo = array(
			'Mesero' => array(
				'className' => 'Mesero',
				'foreignKey' => 'mesero_id'
			)
		);
}
?>