<h2>Crear Mesa</h2>
<?php
	echo $this->Form->create('Mesa');
	echo $this->Form->input('serie');
	echo $this->Form->input('puestos');
	echo $this->Form->input('posicion', array('rows' => 3));
	echo $this->Form->input('mesero_id');
	echo $this->Form->end('Crear mesa');
?>

<?php
	echo $this->Html->link('Volver a lista de mesas', array('controller' => 'mesas', 'action' => 'index'))
?>