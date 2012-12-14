<?php
class MySampleDatasController extends AppController
{
	//public $scaffold;

	public function index()
	{
		$this->layout = "Sample";
		$this->set("header_for_layout" , "SampleApplication");
		$this->set("footer_for_layout" , "copyright by aaa 2012");
		$datas = $this->MySampleData->find('all');
		$this->set("datas" , $datas);
	}

	public function find()
	{
		$this->layout = "Sample";
		$this->set("header_for_layout" , "SampleApplication");
		$this->set("footer_for_layout" , "copylight 2012");

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
		$this->layout = "Sample";
		$this->set("header_for_layout" , "SampleApplication");
		$this->set("footer_for_layout" , "copylight 2012");

		if($this->request->is('post'))
		{
			$this->MySampleData->save($this->request->data);
		}
	}



	public function edit($id)
	{
		$this->layout = "Sample";
		$this->set("header_for_layout" , "SampleApplication");
		$this->set("footer_for_layout" , "CopyLight2012");

		$this->MySampleData->id = $id;
		if($this->request->is("post") || $this->request->is("put"))
		{
			$this->MySampleData->save($this->request->data);
			$this->redirect(array("action" => "index"));
		}
		else
		{
			$this->request->data = $this->MySampleData->read(null , $id);
		}
	}

}