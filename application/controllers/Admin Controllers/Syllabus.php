<?php 
	/**
	 * 
	 */
	class Syllabus extends CI_Controller
	{
		public function index()
		{
			$this->load->model("SyllabusModel");
			$data['Syllabuses'] = $this->SyllabusModel->GetAllSyllabus();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Syllabus/index',$data);
			$this->load->view('footer');
		}

		public function DeletedData()
		{
			$this->load->model("SyllabusModel");
			$data['Syllabuses'] = $this->SyllabusModel->GetAllDeletedSyllabus();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Syllabus/DeletedData',$data);
			$this->load->view('footer');
		}		

		public function AddSyllabus()
		{
			if (isset($_REQUEST['AddSyllabus'])) {
				$this->load->model("SyllabusModel");
				$data['Course_id'] = $this->input->post("Course");
				echo $file =  $_FILES['Syllabus_PDF']['name'];
				$tmp =  $_FILES['Syllabus_PDF']['tmp_name'];
				$path = "Images/".$file;
				if (move_uploaded_file($tmp, $path)) {
					$data['Syllabus_PDF'] = $file;

					$this->SyllabusModel->AddSyllabus($data);
					redirect(base_url()."index.php/Syllabus/");
				}
				else
				{
					echo "<script>";
					echo "alert('File Does Not Uploaded')";
					echo "</script>";
				}
				
			}
			else
			{
				$this->load->model("CourseModel");
				$data['Courses'] = $this->CourseModel->GetAllCourses();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view('Syllabus/AddSyllabus',$data);
				$this->load->view('footer');
			}
		}

		public function DeleteSyllabus($id)
		{
			$this->load->model("SyllabusModel");
			$this->SyllabusModel->DeleteSyllabus($id);
			redirect(base_url()."index.php/Syllabus/DeletedData");
		}

		public function SyllabusStatus($id,$status)
		{
			$this->load->model("SyllabusModel");
			$data['Syllabus_Status'] = $status;
			$this->SyllabusModel->UpdateSyllabus($id,$data);
			if ($status=="Active") {
				redirect(base_url()."index.php/Syllabus/DeletedData");
			}
			else if ($status=="Deactive") {
				redirect(base_url()."index.php/Syllabus/");
			}
		}
	}
 ?>