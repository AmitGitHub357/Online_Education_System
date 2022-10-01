<?php 
	/**
	 * 
	 */
	class Material extends CI_Controller
	{
		public function index()
		{
			// $teacher = $this->session->userdata("Teacher");
			$this->load->model("MaterialModel");
			$data['Materials'] = $this->MaterialModel->GetAllMaterials();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Material/index",$data);
			$this->load->view("footer");

			// echo $teacher['User_id'];
		}
	}
 ?>