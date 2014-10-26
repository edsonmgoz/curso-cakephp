<h2>Detalle del Meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>

<p><strong>DNI: </strong><?php echo $mesero['Mesero']['dni']; ?></p>
<p><strong>teléfono: </strong><?php echo $mesero['Mesero']['telefono']; ?></p>
<p><strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']); ?></p>
<p><strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['modified']); ?></p>

<pre>
<?php
// print_r($mesero);
?>
</pre>

<h3>Encargado de las mesas:</h3>
<?php if (empty($mesero['Mesa'])): ?>
	<p>No tiene mesas asociadas</p>
<?php endif ?>

<?php foreach($mesero['Mesa'] as $m):?>
	<p>
		Serie: <?php echo $m['serie']; ?>
		<br />
		Puestos: <?php echo $m['puestos']; ?>
		<br />
		Posición: <?php echo $m['posicion']; ?>
		<br />
		Creado: <?php echo $m['created']; ?>
		<br />
	</p>
<?php endforeach; ?>

<?php
	echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action'=> 'index'));
?>