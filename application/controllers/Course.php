<?php 
	/**
	 * 
	 */
	class Course extends CI_Controller
	{
		public function index()
		{
			$this->load->model("CourseModel");
			$data['Courses'] = $this->CourseModel->GetAllCourses();
			$title['title'] = $this->router->class;
			$this->load->view("header",$title);
			$this->load->view("Course",$data);
			// $this->load->view("demo",$data);
			$this->load->view("footer");
		}

		public function SingleCourse($id)
		{
			
			$this->load->model("CourseModel");
			$data['Courses'] = $this->CourseModel->GetSingleCourse($id);
			// print_r($data['Courses']);
			$data['Student'] = $this->CourseModel->GetAllStudentsOfCourse($id);
			$data['Categories'] = $this->CourseModel->GetCourseCategories();
			if (isset($_SESSION['Student'])) {
				$data['Materials'] =  $this->CourseModel->GetMaterialByCourse($id);
			}
			
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("SingleCourse",$data);
			$this->load->view("footer");
		}

		public function GetCoursesByCategory($id)
		{
			$this->load->model("CourseModel");
			$data['Courses'] = $this->CourseModel->GetCoursesByCategory($id);
			
			$title['title'] = $this->router->class;
			$this->load->view("header",$title);
			$this->load->view("Course",$data);
			// $this->load->view("demo",$data);
			$this->load->view("footer");
		}

	}
 ?>