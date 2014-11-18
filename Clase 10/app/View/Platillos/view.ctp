<div class="well">
<h2><?php echo __('Platillo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($platillo['Platillo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Platillo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($platillo['CategoriaPlatillo']['categoria'], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('Edit Platillo'), array('action' => 'edit', $platillo['Platillo']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Delete Platillo'), array('action' => 'delete', $platillo['Platillo']['id']), array(), __('Are you sure you want to delete # %s?', $platillo['Platillo']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Platillo'), array('action' => 'add')); ?> </li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('List Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
  </ul>
</div>

<div class="related">
	<h3><?php echo __('Related Cocineros'); ?></h3>
	<?php if (!empty($platillo['Cocinero'])): ?>
	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Apellido'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($platillo['Cocinero'] as $cocinero): ?>
				<tr>
					<td><?php echo $cocinero['id']; ?></td>
					<td><?php echo $cocinero['nombre']; ?></td>
					<td><?php echo $cocinero['apellido']; ?></td>
					<td><?php echo $cocinero['created']; ?></td>
					<td><?php echo $cocinero['modified']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'cocineros', 'action' => 'view', $cocinero['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'cocineros', 'action' => 'edit', $cocinero['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cocineros', 'action' => 'delete', $cocinero['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $cocinero['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>