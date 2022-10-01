<?php 
	/**
	 * 
	 */
	class Material extends CI_Controller
	{
		public function index()
		{
			$teacher = $this->session->userdata("Teacher");
			$this->load->model("MaterialModel");
			$data['Materials'] = $this->MaterialModel->GetAllMaterials($teacher['User_id']);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Material/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$teacher = $this->session->userdata("Teacher");
			$this->load->model("MaterialModel");
			$data['Materials'] = $this->MaterialModel->GetAllDeletedMaterials($teacher['User_id']);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Material/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddMaterial()
		{
			$this->load->model("MaterialModel");
			if (isset($_REQUEST['AddMaterial'])) {
				$userdata = $this->session->userdata("Teacher");
				$data['User_id'] = $userdata['User_id'];
				$data['Course_id'] = $this->input->post('Course');
				$data['Lecture_No'] = $this->input->post("Lecture_No");
				$data['Material_Entry_Date'] = date("Y-m-d h:i:s");

				/*
				* File Upload
				*/

				$file = $_FILES['Material_File']['name'];				
				$tmp = $_FILES['Material_File']['tmp_name'];
				$path = "Images/".$file;
				move_uploaded_file($tmp, $path);
				$data['Material_File'] = $path;

				/*
				* File Upload
				*/

				$this->MaterialModel->AddMaterial($data);
				redirect(base_url().'index.php/Material');
			}
			else
			{
				$this->load->model("CourseModel");
				$data['Courses'] = $this->CourseModel->GetAllCoursesByUser($_SESSION['Teacher']);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Material/AddMaterial", $data);
				$this->load->view("footer");
			}
		}

		public function UpdateMaterial()
		{
			$this->load->model("MaterialModel");
			if (isset($_REQUEST['UpdateMaterial'])) {
				$userdata = $this->session->userdata("Teacher");
				$data['User_id'] = $userdata['User_id'];
				$data['Course_id'] = $this->input->post('Course');
				$data['Lecture_No'] = $this->input->post("Lecture_No");
				$data['Material_Entry_Date'] = date("Y-m-d h:i:s");

				/*
				* File Upload
				*/

				echo $config['upload_path'] = base_url().'Images';
		        $config['allowed_types']        = 'pdf|doc|ppt|docx|pptx';
		        $config['max_size']             = 100000;
		        $config['max_width']            = 10240;
		        $config['max_height']           = 7680;
		        $config['encrypt_name']			= true;

		        $this->load->library('upload', $config);
		        
		    	if (!$this->upload->do_upload('Material_File')) {
		    		echo "<script>";
		    		echo "alert('File Upload Failed')";
		    		echo "</script>";
		    		$error = array('error' => $this->upload->display_errors());
		    		print_r($error);
		    	}
		    	$img=$this->upload->data();
				$data['Material_File'] = $img['file_name'];

				echo "<BR>";
				print_r($data);
				echo "<BR>";
				print_r($img);

				/*
				* File Upload
				*/

				$this->MaterialModel->AddMaterial($data);
				redirect(base_url().'index.php/Material');
			}
			else
			{
				$this->load->model("CourseModel");
				$data['Courses'] = $this->CourseModel->GetAllCourses();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Material/AddMaterial", $data);
				$this->load->view("footer");
			}
		}

		public function DeleteMaterial($id)
		{
			$this->load->model("MaterialModel");
			$this->MaterialModel->DeleteMaterial($id);
			redirect(base_url().'index.php/Material');
		}

		public function MaterialStatus($id,$status)
		{
			$this->load->model("MaterialModel");
			$data['Material_Status'] = $status;
			$this->MaterialModel->UpdateMaterial($id,$data);
			redirect(base_url().'index.php/Material');
		}
	}
 ?>