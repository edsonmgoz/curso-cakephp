<h2>Crear Mesero</h2>

<?php
	echo $this->Form->create('Mesero');
	echo $this->Form->input('dni');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('telefono');
	echo $this->Form->end('Crear Mesero');
?>