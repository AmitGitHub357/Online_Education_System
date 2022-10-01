<?php 
	/**
	 * 
	 */
	class Contact_Us extends CI_Controller
	{
		public function index()
		{
			$this->load->model("Contact_UsModel");
			$data['Contacts'] = $this->Contact_UsModel->GetAllData();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Contact_Us/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("Contact_UsModel");
			$data['Contacts'] = $this->Contact_UsModel->GetAllDeletedData();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Contact_Us/DeletedData",$data);
			$this->load->view("footer");
		}
	}
 ?>