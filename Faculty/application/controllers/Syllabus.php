<?php 
	/**
	 * 
	 */
	class Syllabus extends CI_Controller
	{
		public function index()
		{
			$teacher = $this->session->userdata("Teacher");
			$this->load->model("SyllabusModel");
			$data['Syllabuses'] = $this->SyllabusModel->GetAllSyllabus($teacher['User_id']);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Syllabus/index',$data);
			$this->load->view('footer');
		}
	}
 ?>