<?php
class TareasController extends AppController {
	var $name = 'Tareas';
	var $helpers = array('Html', 'Form', 'Time');

function index($status=null) {
	if($status == 'hecha')
		$tareas = $this->Tarea->find('all', array('conditions' => array('Tarea.hecha' => '1')));
	else if ($status == 'pendiente')
		$tareas = $this->Tarea->find('all', array('conditions' => array('Tarea.hecha' => '0')));
	else
		$tareas = $this->Tarea->find('all');
	$this->set('tareas', $tareas);
	$this->set('status', $status);

	//$this->set('tareas', $this->Tarea->find('all'));
}

function edit($id = null){
	if (!$id) {
		$this->Session->setFlash('Tarea Invalida');
		$this->redirect(array('action'=>'index'), null, true);
	}
	if (empty($this->data)) {
		$this->data = $this->Tarea->find('first', array('conditions'=>array('id' => $id)));
	} else {
		if ($this->Tarea->save($this->data)) {
			$this->Session->setFlash('La tarea ha sido salvada');
			$this->redirect(array('action'=>'index'), null, true);
		} else {
			$this->Session->setFlash('La tarea no ha podido ser salvada. Intenta de nuevo.');
		}
	}
}

function delete($id = null) {
	if(!$id) {
		$this->Session->setFlash('id Invalida para Tarea');
		$this->redirect(array('action'=>'index'), null, true);
	}
	if ($this->Tarea->delete($id)) {
		$this->Session->setFlash('Tarea # '.$id.' borrada');
		$this->redirect(array('action'=>'index'), null, true);
	}
}

function add() {
	if (!empty($this->data)) {
		$this->Tarea->create();
	if ($this->Tarea->save($this->data)) {
		$this->Session->setFlash('La Tarea ha sido salvada');
		$this->redirect(array('action'=>'index'), null, true);
	} else {
		$this->Session->setFlash('Tarea no salvada. Prueba de nuevo.');
	}
	}
}

}
?>