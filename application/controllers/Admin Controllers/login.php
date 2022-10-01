<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		public function index()
		{
			$this->load->model("LoginModel");
			if (isset($_REQUEST['Login'])) {
				$Username = $this->input->post("Username");
				$Password = $this->input->post("Password");

				$data = $this->LoginModel->GetUserCredentials($Username, $Password);

				if (isset($data)) {
					$this->session->set_userdata('Admin', $data);
				}
				else
				{
					echo "<script>";
					echo "alert('Email or Password may be Wrong')";
					echo "</script>";
				}
				redirect(base_url());
			}
			else
			{
				$this->load->view("login");
			}
			
		}

		public function logout()
		{
			$this->session->unset_userdata('Admin');
			redirect(base_url().'index.php/Login');
		}
	}
 ?>