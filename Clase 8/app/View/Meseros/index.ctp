<div class="page-header">

	<h2><?php echo __('Meseros'); ?></h2>

</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($meseros as $mesero): ?>
	<tr>
		<td><?php echo h($mesero['Mesero']['id']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['dni']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['created']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mesero['Mesero']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mesero['Mesero']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mesero['Mesero']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $mesero['Mesero']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-sm btn-info'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-sm btn-info'));
	?>
	</div>


</div>
