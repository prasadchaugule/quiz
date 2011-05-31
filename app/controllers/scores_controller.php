<?php
class ScoresController extends AppController {

	var $name = 'Scores';
	var $helpers = array('Ajax', 'Javascript', 'Time');

	function index() {
		$this->Score->recursive = 0;
		$this->set('scores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid score', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('score', $this->Score->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Score->create();
			if ($this->Score->save($this->data)) {
				$this->Session->setFlash(__('The score has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Score->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid score', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Score->save($this->data)) {
				$this->Session->setFlash(__('The score has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Score->read(null, $id);
		}
		$users = $this->Score->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for score', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Score->delete($id)) {
			$this->Session->setFlash(__('Score deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Score was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Score->recursive = 0;
		$this->set('scores', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid score', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('score', $this->Score->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Score->create();
			if ($this->Score->save($this->data)) {
				$this->Session->setFlash(__('The score has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Score->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid score', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Score->save($this->data)) {
				$this->Session->setFlash(__('The score has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The score could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Score->read(null, $id);
		}
		$users = $this->Score->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for score', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Score->delete($id)) {
			$this->Session->setFlash(__('Score deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Score was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>