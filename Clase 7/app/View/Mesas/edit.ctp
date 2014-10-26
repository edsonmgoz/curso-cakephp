<div class="mesas form">
<?php echo $this->Form->create('Mesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mesa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('serie');
		echo $this->Form->input('puestos');
		echo $this->Form->input('posicion');
		echo $this->Form->input('mesero_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meseros'), array('controller' => 'meseros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesero'), array('controller' => 'meseros', 'action' => 'add')); ?> </li>
	</ul>
</div>
