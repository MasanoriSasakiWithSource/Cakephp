<?php
class MySampleDatasController extends AppController
{
	//public $scaffold;

	public function index()
	{
		$this->_setLayout();
		$datas = $this->MySampleData->find('all');
		$this->set("datas" , $datas);
	}

	public function find()
	{
		$this->_setLayout();

		if(isset($this->data['id']))
		{
			$id = $this->data['id'];
			$status = array(
					'conditions' => array(
								'MySampleData.id' => $id
								)
					);
			$data = $this->MySampleData->find('first' , $status);
		}
		else
		{
			$data = null;
		}
		$this->set("data" , $data);
	}

	public function add()
	{
		$this->_setLayout();

		if($this->request->is('post'))
		{
			$this->MySampleData->save($this->request->data);
			$this->redirect(array("action" => "index"));
		}
	}


	public function edit($id)
	{
		$this->_setLayout();
		$this->_setUpFormRequest($id, 'edit');
	}

	public function delete($id)
	{
		$this->_setLayout();
		$this->_setUpFormRequest($id , 'delete');
	}

	private function _setLayout()
	{
		$this->layout = "Sample";
		$this->set("header_for_layout" , "SampleApplication");
		$this->set("footer_for_layout" , "copylight2012");
	}


	private function _setUpFormRequest($id , $job)
	{
		$this->MySampleData->id = $id;

		if ($this->request->is("post") || $this->request->is("put"))
		{
			if($job = "edit")
			{
				$this->MySampleData->delete($this->request->data('MySampleData.id'));
			}
			else
			{
				$this->MySampleData->delete($this->request->data('MySampleData.id'));
			}
			$this->redirect(array('action' => "index"));
		}
		else
		{
			$this->request->data = $this->MySampleData->read(null , $id);
		}
	}

}