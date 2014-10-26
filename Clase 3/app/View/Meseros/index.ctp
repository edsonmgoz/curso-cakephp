<h2>Lista de Meseros</h2>
<?php
	echo $this->Html->link('Crear Mesero', array('controller' => 'meseros', 'action' => 'nuevo'));
?>
<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Acciones</td>
	</tr>

	<?php foreach($meseros as $mesero): ?>
		<tr>
			<td> <?php echo $mesero['Mesero']['id']; ?> </td>
			<td> <?php echo $mesero['Mesero']['nombre']; ?> </td>
			<td> <?php echo $mesero['Mesero']['apellido']; ?> </td>
			<td> <?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])); ?> </td>
		</tr>
	<?php endforeach; ?>
</table>