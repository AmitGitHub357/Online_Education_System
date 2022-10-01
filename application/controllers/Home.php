<?php
	class Home extends CI_Controller {
		public function index()
		{
			$this->load->model("CourseModel");
			$Courses = $this->CourseModel->GetAllCourses();

			if (count($Courses)>=3) {
				$data['Courses'] = array($Courses[0],$Courses[1],$Courses[2]);
			}
			else
			{
				$data['Courses'] = array();
				foreach ($Courses as $Course) {
					array_push($data['Courses'], $Course);
				}
			}
			
			$title['title'] = $this->router->class;
			$this->load->view('header',$title);
			$this->load->view('index',$data);
			$this->load->view('footer');
		}

		public function Contact()
		{
			if (isset($_REQUEST['Contact'])) {
				$data['User_Name'] = $this->input->post("Name");
				$data['User_Email'] = $this->input->post("Email");
				$data['User_Mobile'] = $this->input->post("MobileNo");
				$data['User_Subject'] = $this->input->post("Subject");
				$data['User_Message'] = $this->input->post("Message");
				$data['Contact_Entry_date'] = date('Y-m-d h:i:s');

				$this->load->model("HomeModel");
				$this->HomeModel->AddContact($data);
				echo "<script>";
				echo "alert('Thank You For Contacting Us')";
				echo "window.location.href = '".base_url()."index.php/Contact/'";
				echo "</script>";
				// redirect(base_url().'index.php/Contact');
			}
				$title['title'] = "Contact Us";
				$this->load->view('header',$title);
				$this->load->view('Contact');
				$this->load->view('footer');
			
		}

		public function ShowProfile()
		{
			$user = $_SESSION['Student'];

			$this->load->model("HomeModel");
			$data['Student'] = $this->HomeModel->GetSingleUser($user['User_id']);
			$Courses = $this->HomeModel->CourseByStudent($user['User_id']);
			for ($i=0; $i <count($Courses) ; $i++) { 
				$Course[$i] = $Courses[$i]['Course_Name'];
			}
			$data['Courses'] = implode(", ", $Course);

			$title['title'] = "Profile";
			$this->load->view("header",$title);
			$this->load->view("Profile",$data);
			$this->load->view("footer");
		}

		public function UpdateProfile($id)
		{
			$this->load->model("HomeModel");
			if (isset($_REQUEST['UpdateProfile'])) {
				$data['Mobile_Number'] = $this->input->post("Mobile");
				$data['Gender'] = $this->input->post("Gender");
				$data['Address'] = $this->input->post("Address");

				if ($file = $_FILES['Photo']['name']) {
					$tmp = $_FILES['Photo']['tmp_name'];
					$path = 'Images/ProfilePhotos/'.$file;
					move_uploaded_file($tmp, $path);
					$data['Photo'] = $path;
				}

				// echo $data['Photo'];

				$this->HomeModel->UpdateProfile($id,$data);
			 	$user = $this->HomeModel->GetSingleUser($id);
				$this->session->set_userdata("Student",$user);
				redirect(base_url());
			}	

			$data['Student'] = $this->HomeModel->GetSingleUser($id);
			$title['title'] = "Profile";
			$this->load->view("header",$title);
			$this->load->view("UpdateProfile",$data);
			$this->load->view("footer");
		}

		public function ChangePassword($id)
		{
			$this->load->model("HomeModel");
			if (isset($_REQUEST['ChangePassword'])) {

				$OldPassword = $this->input->post("OldPassword");
				$data['Password'] = $this->input->post("NewPassword");
				

				$User = $_SESSION['Student'];

				if ($OldPassword == $User['Password']) {
					$this->HomeModel->UpdateProfile($id,$data);
				 	$user = $this->HomeModel->GetSingleUser($id);
					$this->session->set_userdata("Student",$user);

					echo "<script>";
					echo "alert('Password Changed Successfully')";
					// echo "window.location.href = '".base_url()."index.php/Home'";
					echo "window.location.href = '".base_url()."index.php/Home/'";
					echo "</script>";
					// redirect(base_url().'index.php/Home/ShowProfile/'.$User['User_id']);
					// header("location:Home");
				}
				else
				{
					echo "<script>";
					echo "alert('Old Password is wrong')";
					echo "</script>";
				}
			}
			
			$title['title'] = "Change Password";
			$this->load->view("header",$title);
			$this->load->view("ChangePassword");
			$this->load->view("footer");
		}

		public function About()
		{
			$title['title'] = "About Us";
			$this->load->view("header",$title);
			$this->load->view("About");
			$this->load->view("footer");
		}
	}
?> 