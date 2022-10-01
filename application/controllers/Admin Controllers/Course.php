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

		public function DeletedData()
		{
			$this->load->model("CourseModel");
			$data['Courses'] = $this->CourseModel->GetAllDeletedCourses();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Course/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddCourse()
		{
			if (isset($_REQUEST['AddCourse'])) {

				$this->load->model("CourseModel");
				$data['Course_Name'] = $this->input->post("Course_Name");
				$data['Course_Fees'] = $this->input->post("Course_Fees");
				$data['Course_Period'] = $this->input->post("Course_Period");
				$data['Category_id'] = $this->input->post("Category_id");
				$data['Course_Description'] = $this->input->post("Course_Description");
				$data['Course_Entry_Date'] = date('Y-m-d h:i:s');

				/*
				*	File Upload
				*/
				
				$file = $_FILES['Course_Image']['name'];				
				$tmp = $_FILES['Course_Image']['tmp_name'];
				$path = "Images/".$file;
				move_uploaded_file($tmp, $path);
				$data['Course_Image'] = $path;

				/*
				*	File Upload
				*/
				$this->CourseModel->AddCourse($data);
				redirect(base_url()."index.php/Course");
			}
			else
			{
				$this->load->model("CategoryModel");
				$data['Categories'] = $this->CategoryModel->GetAllCategories();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Course/AddCourse",$data);
				$this->load->view("footer");
			}
		}

		public function DeleteCourse($id)
		{
			$this->load->model("CourseModel");
			$data = $this->CourseModel->GetSingleCourse($id);
			if (unlink(APPPATH.'Images/'.$data['Course_Image'])) {
				$this->CourseModel->DeleteCourse($id);
				redirect(base_url().'index.php/Course');
			}
			else
			{
				echo "<script>";
	    		echo "alert('File Delete Failed')";
	    		echo "</script>";
			}
			
		}

		public function UpdateCourse($id)
		{
			$this->load->model("CourseModel");
			if (isset($_REQUEST['UpdateCourse'])) {
				/*
				*  Pending File Upload
				*/

				$this->load->model("CourseModel");
				$data['Course_Name'] = $this->input->post("Course_Name");
				$data['Course_Fees'] = $this->input->post("Course_Fees");
				$data['Course_Period'] = $this->input->post("Course_Period");
				$data['Category_id'] = $this->input->post("Category_id");
				$data['Course_Description'] = $this->input->post("Course_Description");
				$data['Course_Update_Date'] = date('Y-m-d h:i:s');

				if ($file = $_FILES['Course_Image']['name']) {

					$demo = $this->CourseModel->GetSingleCourse($id);
					unlink($demo['Course_Image']);

					$tmp = $_FILES['Course_Image']['tmp_name'];
					$path = "Images/".$file;
					move_uploaded_file($tmp, $path);
					$data['Course_Image'] = $path;

				}
				
				$this->CourseModel->UpdateCourse($id, $data);
				redirect(base_url()."index.php/Course");
			}
			else
			{
				$this->load->model("CategoryModel");
				$data['Categories'] = $this->CategoryModel->GetAllCategories();
				$data['Course'] = $this->CourseModel->GetSingleCourse($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Course/UpdateCourse",$data);
				$this->load->view("footer");
			}
		}

		public function CourseStatus($id,$status)
		{
			$this->load->model("CourseModel");
			$data['Course_Status'] = $status;
			$this->CourseModel->UpdateCourse($id, $data);

			if ($status=='Active') {
				redirect(base_url()."index.php/Course.DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/Course");
			}
			
		}
	}
 ?>