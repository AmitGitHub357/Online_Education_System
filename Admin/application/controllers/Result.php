<?php 
	/**
	 * 
	 */
	class Result extends CI_Controller
	{
		public function index()
		{
			$this->load->model("ResultModel");
			$data['Results'] = $this->ResultModel->GetAllResults();

			$title['title'] = $this->router->class;
			$this->load->view("header",$title);
			$this->load->view("Result/index",$data);
			$this->load->view("footer");
		}
	}
 ?>