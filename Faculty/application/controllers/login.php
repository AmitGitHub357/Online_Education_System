<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		public function index()
		{
			if ($this->session->has_userdata('Teacher')) {
				redirect(base_url());
			}
			$this->load->model("LoginModel");
			if (isset($_REQUEST['Login'])) {
				$Username = $this->input->post("Username");
				$Password = $this->input->post("Password");

				$data = $this->LoginModel->GetUserCredentials($Username, $Password);

				if (isset($data) AND $data['User_Type']=='Teacher') {
					$this->session->set_userdata('Teacher', $data);
					echo "<script>";
					echo "alert('Login Success')";
					echo "</script>";
				}
				else
				{
					echo "<script>";
					echo "alert('Email or Password may be Wrong')";
					echo "</script>";
				}
				
			}
				$this->load->view("login");
			
			
		}

		public function ChangePassword()
		{
			if (isset($_REQUEST['ChangePassword'])) {
				$this->load->model("UsersModel");
				// $id = $this->session->get_userdata('Teacher');
				$id = $_SESSION['Teacher'];
				$OldPassword = $this->input->post("OldPassword");
				$data['Password'] = $this->input->post("NewPassword");
				if ($OldPassword==$id['Password']) {
					$this->UsersModel->UpdateUsers($id['User_id'],$data);
					redirect(base_url());
				}
				else
				{
					echo "<script>";
					echo "alert('Old Password is wrong')";
					echo "</script>";
				}
			}
				$this->load->view("ChangePassword");
		}

		public function logout()
		{
			$this->session->unset_userdata('Teacher');
			redirect(base_url().'index.php/Login');
		}
	}
 ?>