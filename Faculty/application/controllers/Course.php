<?php 
	/**
	 * 
	 */
	class Course extends CI_Controller
	{
		public function index()
		{
			$this->load->model("CourseModel");
			// $this->CourseModel->EmptyTable();
			$data['Courses'] = $this->CourseModel->GetAllCourses();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Course/index",$data);
			$this->load->view("footer");
		}

		public function GetSingleCourse($id)
		{
			$this->load->model("CourseModel");
			
			$data['Course'] = $this->CourseModel->GetSingleCourse($id);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Course/SingleCourse",$data);
			$this->load->view("footer");
		}
	}
 ?>