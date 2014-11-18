<div class="well">
<h2><?php echo __('Categoria Platillo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaPlatillo['CategoriaPlatillo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($categoriaPlatillo['CategoriaPlatillo']['categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('Edit Categoria Platillo'), array('action' => 'edit', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Delete Categoria Platillo'), array('action' => 'delete', $categoriaPlatillo['CategoriaPlatillo']['id']), array(), __('Are you sure you want to delete # %s?', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('action' => 'add')); ?> </li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
  </ul>
</div>

<div class="related">
	<h3><?php echo __('Related Platillos'); ?></h3>
	<?php if (!empty($categoriaPlatillo['Platillo'])): ?>
	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Descripcion'); ?></th>
				<th><?php echo __('Precio'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Categoria Platillo Id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($categoriaPlatillo['Platillo'] as $platillo): ?>
				<tr>
					<td><?php echo $platillo['id']; ?></td>
					<td><?php echo $platillo['nombre']; ?></td>
					<td><?php echo $platillo['descripcion']; ?></td>
					<td><?php echo $platillo['precio']; ?></td>
					<td><?php echo $platillo['created']; ?></td>
					<td><?php echo $platillo['modified']; ?></td>
					<td><?php echo $platillo['categoria_platillo_id']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'platillos', 'action' => 'view', $platillo['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'platillos', 'action' => 'edit', $platillo['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'platillos', 'action' => 'delete', $platillo['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $platillo['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>
