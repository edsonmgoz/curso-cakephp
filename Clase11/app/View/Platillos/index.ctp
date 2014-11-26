<div class="page-header">
	<h2><?php echo __('Platillos'); ?></h2>
</div>

<div class="col-md-12">

	<table class="table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
				<th><?php echo $this->Paginator->sort('precio'); ?></th>

				<th><?php echo $this->Paginator->sort('foto'); ?></th>

				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th><?php echo $this->Paginator->sort('categoria_platillo_id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($platillos as $platillo): ?>
		<tr>
			<td><?php echo h($platillo['Platillo']['id']); ?>&nbsp;</td>
			<td><?php echo h($platillo['Platillo']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($platillo['Platillo']['descripcion']); ?>&nbsp;</td>
			<td><?php echo h($platillo['Platillo']['precio']); ?>&nbsp;</td>

			<td><?php echo $this->Html->image('../files/platillo/foto/' . $platillo['Platillo']['foto_dir'] . '/' . 'thumb_' .$platillo['Platillo']['foto']); ?></td>

			<td><?php echo h($platillo['Platillo']['created']); ?>&nbsp;</td>
			<td><?php echo h($platillo['Platillo']['modified']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($platillo['CategoriaPlatillo']['categoria'], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $platillo['Platillo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $platillo['Platillo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $platillo['Platillo']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $platillo['Platillo']['id'])); ?>
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
	<nav>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	</nav>