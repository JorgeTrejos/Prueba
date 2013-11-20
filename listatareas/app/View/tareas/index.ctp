<h2>Tareas</h2>
<?php if(empty($tareas)): ?>
No hay tareas en esta lista
<?php else: ?>
<table>
	<tr>
		<th>Titulo</th>
		<th>Estatus</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Acciones</th>
	</tr>
	<?php foreach ($tareas as $tarea): ?>
	<tr>
		<td>
			<?php echo $tarea['Tarea']['titulo'] ?>
		</td>
		<td>
			<?php
			if ($tarea['Tarea']['hecha']) echo "Hecha";
			else echo "Pendiente";
			?>
		</td>
		<td>
			<?php echo $this->Time->niceShort($tarea['Tarea']['created']) ?>
		</td>
		<td>
			<?php echo $this->Time->niceShort($tarea['Tarea']['modified']) ?>
		</td>
		<td>
			<?php echo $this->Html->link('Editar', array('action'=>'edit', $tarea['Tarea']['id'])); ?>
			<?php echo $this->Html->link('Borrar', array('action'=>'delete', $tarea['Tarea']['id']), null, '¿Estas Seguro?'); ?>
		</td>		
	</tr>
	<?php endforeach; ?>
</table>
<?php endif; ?>
<?php echo $this->Html->link('Añadir Tarea', array('action'=>'add')); ?><br />


<?php if($status): ?>
<?php echo $this->Html->link('Listar Todas las Tareas', array('action'=>'index')); ?><br />
<?php endif; ?>
<?php if($status != 'hecha'): ?>
<?php echo $this->Html->link('Listar Tareas Hechas', array('action'=>'index','hecha')); ?><br />
<?php endif; ?>
<?php if($status != 'pendiente'): ?>
<?php echo $this->Html->link('Listar Tareas Pendientes', array('action'=>'index', 'pendiente')); ?><br />
<?php endif; ?>