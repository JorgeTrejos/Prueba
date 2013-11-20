<?php
class Tarea extends AppModel {
	var $name = 'Tarea';
	var $validate = array(
		'titulo' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Título'
			)
		);
}
?>