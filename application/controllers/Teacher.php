<?php 
	/**
	 * 
	 */
	class Teacher extends CI_Controller
	{
		public function index()
		{
			$this->load->model("TeacherModel");
			$data['Teachers'] = $this->TeacherModel->GetAllTeachers();

			$title['title'] = $this->router->class;
			$this->load->view('header',$title);
			$this->load->view('Teachers',$data);
			$this->load->view('footer');
		}
	}
 ?>