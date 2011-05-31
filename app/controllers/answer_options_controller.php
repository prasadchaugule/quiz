<?php
class AnswerOptionsController extends AppController {

	var $name = 'AnswerOptions';
	var $helpers = array('Ajax', 'Javascript', 'Time');

	function index() {
		$this->AnswerOption->recursive = 0;
		$this->set('answerOptions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answer option', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answerOption', $this->AnswerOption->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AnswerOption->create();
			if ($this->AnswerOption->save($this->data)) {
				$this->Session->setFlash(__('The answer option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer option could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->AnswerOption->Question->find('list');
		$this->set(compact('questions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answer option', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswerOption->save($this->data)) {
				$this->Session->setFlash(__('The answer option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer option could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswerOption->read(null, $id);
		}
		$questions = $this->AnswerOption->Question->find('list');
		$this->set(compact('questions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answer option', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswerOption->delete($id)) {
			$this->Session->setFlash(__('Answer option deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answer option was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->AnswerOption->recursive = 0;
		$this->set('answerOptions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answer option', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answerOption', $this->AnswerOption->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AnswerOption->create();
			if ($this->AnswerOption->save($this->data)) {
				$this->Session->setFlash(__('The answer option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer option could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->AnswerOption->Question->find('list');
		$this->set(compact('questions'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answer option', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswerOption->save($this->data)) {
				$this->Session->setFlash(__('The answer option has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answer option could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswerOption->read(null, $id);
		}
		$questions = $this->AnswerOption->Question->find('list');
		$this->set(compact('questions'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answer option', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswerOption->delete($id)) {
			$this->Session->setFlash(__('Answer option deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answer option was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>