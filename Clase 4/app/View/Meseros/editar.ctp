<h2>Editar Mesero</h2>

<?php echo $this->Form->create('Mesero'); ?>
<?php echo $this->Form->input('dni'); ?>
<?php echo $this->Form->input('nombre'); ?>
<?php echo $this->Form->input('apellido'); ?>
<?php echo $this->Form->input('telefono'); ?>
<?php echo $this->Form->end('Editar Mesero'); ?>

<?php
	echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action'=> 'index'));
?>