<?php
class MeserosController extends AppController
{
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');

	public function index()
	{
		$this->set('meseros', $this->Mesero->find('all'));
	}

	public function ver($id = null)
	{
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$mesero = $this->Mesero->findById($id);

		if (!$mesero)
		{
			throw new NotFoundException('El mesero no existe');
		}

		$this->set('mesero', $mesero);
	}

	public function nuevo()
	{
		if ($this->request->is('post'))
		{
			$this->Mesero->create();
			if ($this->Mesero->save($this->request->data))
			{
				$this->Session->setFlash('El mesero ha sido creado', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));

			}

			$this->Session->setFlash('No se pudo crear el Mesero');
		}
	}

	public function editar($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException("Datos Invalidos");

		}

		$mesero = $this->Mesero->findById($id);
		if(!$mesero)
		{
			throw new NotFoundException("El mesero no ha sido encontrado");
		}

		if($this->request->is(array('post', 'put')))
		{
			$this->Mesero->id = $id;

			if($this->Mesero->save($this->request->data))
			{
				$this->Session->setFlash('El mesero ha sido modificado', $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no pudo ser modificado.');
		}

		if(!$this->request->data)
		{
			$this->request->data = $mesero;
		}
	}

	public function eliminar($id)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException('INCORRECTO');
		}
		if($this->Mesero->delete($id))
		{
			$this->Session->setFlash('El mesero ha sido eliminado', $element = 'default', $params = array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>