<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaPlatillos Controller
 *
 * @property CategoriaPlatillo $CategoriaPlatillo
 * @property PaginatorComponent $Paginator
 */
class CategoriaPlatillosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoriaPlatillo->recursive = 0;
		$this->set('categoriaPlatillos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaPlatillo->exists($id)) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		$options = array('conditions' => array('CategoriaPlatillo.' . $this->CategoriaPlatillo->primaryKey => $id));
		$this->set('categoriaPlatillo', $this->CategoriaPlatillo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaPlatillo->create();
			if ($this->CategoriaPlatillo->save($this->request->data)) {
				$this->Session->setFlash('The categoria platillo has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The categoria platillo could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoriaPlatillo->exists($id)) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaPlatillo->save($this->request->data)) {
				$this->Session->setFlash('The categoria platillo has been saved.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The categoria platillo could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CategoriaPlatillo.' . $this->CategoriaPlatillo->primaryKey => $id));
			$this->request->data = $this->CategoriaPlatillo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoriaPlatillo->id = $id;
		if (!$this->CategoriaPlatillo->exists()) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaPlatillo->delete()) {
			$this->Session->setFlash('The categoria platillo has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The categoria platillo could not be deleted. Please, try again.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
