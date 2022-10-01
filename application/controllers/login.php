<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		public function index()
		{
			if ($this->session->has_userdata('Student')) {
				redirect(base_url());
			}
			$this->load->model("LoginModel");
			if (isset($_REQUEST['Login'])) {
				$Username = $this->input->post("Username");
				$Password = $this->input->post("Password");

				$data = $this->LoginModel->GetUserCredentials($Username, $Password);

				if (isset($data) and $data['User_Type']=='Student') {
					$this->session->set_userdata('Student', $data);
					echo "<script>";
				echo "alert('Login Success');";
				echo "window.location.href = '".base_url()."'";
				echo "</script>";
					// redirect(base_url());
				}
				else
				{
					echo "<script>";
					echo "alert('Email or Password may be Wrong')";
					echo "</script>";
				}
				
			}
			$title['title'] = "Login";
			$this->load->view("header",$title);
			$this->load->view("Login");
			$this->load->view("footer");
			
		}

		public function Logout()
		{
			$this->session->unset_userdata('Student');
			redirect(base_url());
		}
	}
 ?>