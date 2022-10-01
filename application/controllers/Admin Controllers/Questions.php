<?php 
	/**
	 * 
	 */
	class Questions extends CI_Controller
	{
		public function index()
		{
			$this->load->model("QuestionsModel");
			$data['Questions'] = $this->QuestionsModel->GetAllQuestions();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Questions/index",$data);
			$this->load->view("footer");
		}
	}
 ?>