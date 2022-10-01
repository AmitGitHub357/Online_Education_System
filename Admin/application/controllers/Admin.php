<?php 

	class Admin extends CI_Controller
	{
		public function index()
		{
			$this->load->model("AdminModel");
			$data['Admins'] = $this->AdminModel->GetAllAdmins();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Admin/index",$data);
			$this->load->view("footer");
		}

		public function AddAdmin()
		{
			$this->load->model("AdminModel");
			if (isset($_REQUEST['AddAdmin'])) {
				$data['Admin_Name'] = $this->input->post("Admin_Name");
				$data['Admin_Email'] = $this->input->post("Admin_Email");
				$data['Admin_Password'] = $this->input->post("Admin_Password");
				$data['Admin_Type'] = "Admin";
				$data['Admin_Entry_Date'] = date("Y-m-d h:i:s");

				$this->AdminModel->AddAdmin($data);
				redirect(base_url()."index.php/Admin");
			}
			else
			{
				$title['title'] = $this->router->class;
				// $this->load->view("header", $title);
				$this->load->view("Admin/AddAdmin");
				$this->load->view("footer");
			}
		}

		public function DeleteAdmin($id)
		{
			$this->load->model("AdminModel");
			$this->AdminModel->DeleteAdmin($id);
			redirect(base_url()."index.php/Admin");
		}

		public function AdminStatus($id,$status)
		{
			$this->load->model("AdminModel");
			$data['Admin_Status'] = $status;
			$data['Admin_Update_Date'] = date("Y-m-d h:i:s");
			$this->AdminModel->AdminStatus($id,$data);
			redirect(base_url()."index.php/Admin");
		}
	}
 ?>