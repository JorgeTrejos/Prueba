<?php echo $this->form->create('Tarea'); ?>
<fieldset>
<legend>Añadir Nueva Tarea</legend>
<?php
	echo $this->form->input('titulo');
	echo $this->form->input('hecha');
?>
</fieldset>
<?php echo $this->form->end('Añadir Tarea'); ?>
<?php echo $this->html->link('Listar todas las tareas', array('action'=>'index')); ?><br />

<?php echo $this->Html->link('Listar Tareas Hechas', array('action'=>'index','hecha')); ?><br />
<?php echo $this->Html->link('Listar Tareas Pendientes', array('action'=>'index', 'pendiente')); ?><br />