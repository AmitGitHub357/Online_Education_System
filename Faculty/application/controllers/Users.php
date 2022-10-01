<?php 
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		public function index()
		{
			$this->load->model("UsersModel");
			$data['users'] = $this->UsersModel->GetAllUsers();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Users/index",$data);
			$this->load->view("footer");
		}

		public function UserStatus($id, $status)
		{
			$this->load->model("UsersModel");
			$data['User_Status'] = $status;
			$data['User_Update_Date'] = date('Y-m-d h:i:s');
			$this->UsersModel->UpdateUsers($id,$data);
			redirect(base_url().'index.php/Users');
		}

		public function UpdateProfile()
		{
			$User_Data = $_SESSION['Teacher'];
			$this->load->model("UsersModel");

			$data['Profile'] = $this->UsersModel->GetSingleUserData($User_Data['User_id']);

			if (isset($_REQUEST['UpdateProfile'])) {
				$User['Mobile_Number'] = $this->input->post("Mobile_Number");
				$User['Gender'] = $this->input->post("Gender");
				$User['Address'] = $this->input->post("Address");

				if ($Photo = $_FILES['Photo']['name']) {
					$TmpPhoto = $_FILES['Photo']['tmp_name'];
					// echo "<BR><BR><BR>";
					$path = "Images/".$Photo;
					// echo "<BR><BR><BR>";
					move_uploaded_file($TmpPhoto, $path);
					// echo "<BR><BR><BR>";
					$User['Photo'] = $path;
					// echo "<BR><BR><BR>";
				}

				$Photo;

				$id = $data['Profile']['User_id'];
				
				$this->UsersModel->UpdateUsers($id, $User);
				$data = $this->UsersModel->GetSingleUserData($id);
				$this->session->set_userdata('Teacher', $data);
				redirect(base_url());
			}

			else
			{

			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Users/UpdateProfile",$data);
			$this->load->view("footer");
		}
		}
	}
 ?>