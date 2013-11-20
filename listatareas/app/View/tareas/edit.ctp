<?php echo $this->Form->create('Tarea'); ?>
<fieldset>
<legend>Editar Tarea</legend>
<?php
echo $this->Form->hidden('id');
echo $this->Form->input('titulo');
echo $this->Form->input('hecha');
?>
</fieldset>
<?php echo $this->Form->end('Guardar'); ?>
<?php echo $this->html->link('Listar todas las tareas', array('action'=>'index')); ?><br/>
<?php echo $this->Html->link('Añadir Tarea', array('action'=>'add')); ?><br/>

<?php echo $this->Html->link('Listar Tareas Hechas', array('action'=>'index','hecha')); ?><br />
<?php echo $this->Html->link('Listar Tareas Pendientes', array('action'=>'index', 'pendiente')); ?><br />