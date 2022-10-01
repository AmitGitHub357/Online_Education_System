<?php 
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		public function index($User_Type)
		{
			$this->load->model("UsersModel");
			$data['users'] = $this->UsersModel->GetAllUsers($User_Type);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Users/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData($User_Type)
		{
			$this->load->model("UsersModel");
			$data['users'] = $this->UsersModel->GetAllDeletedUsers($User_Type);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Users/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddUser($User_Type)
		{
			$this->load->model("UsersModel");
			if (isset($_REQUEST['AddUser'])) {
				$data['Name'] = $this->input->post("Name");
				$data['UserName'] = $this->input->post("UserName");
				$data['DOB'] = $this->input->post("DOB");
				$dob = explode("-", $data['DOB']);
				$data['Password'] = $data['Name']."_".$dob[0];
				$data['City_id'] = $this->input->post('City');
				$data['Mobile_Number'] = $this->input->post("MobileNo");
				$data['User_Type'] = $this->input->post("UserType");
				$data['User_Entry_Date'] = date('Y-m-d h:i:s');
				$Courses = $this->input->post("Course");
				$this->UsersModel->AddUser($data,$Courses);
				$message = "Email = ".$data['UserName']." and Password = ".$data['Password'];
				mail($data['UserName'], "Email And Password", $message);
			}
				$this->load->model("CityModel");
				$this->load->model("CourseModel");
				$data['Cities'] = $this->CityModel->GetAllCities();
				$data['Courses'] = $this->CourseModel->GetAllCourses();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Users/AddUser", $data);
				$this->load->view("footer");
		}

		public function UserStatus($id, $status,$User_Type)
		{
			$this->load->model("UsersModel");
			$data['User_Status'] = $status;
			$data['User_Update_Date'] = date('Y-m-d h:i:s');
			$this->UsersModel->UpdateUsers($id,$data);
			
			if ($status=='Active') {
				redirect(base_url().'index.php/Users/DeletedData/'.$User_Type);
			}
			elseif ($status=='Deactive') {
				redirect(base_url().'index.php/Users/index/'.$User_Type);
			}
			
		}
	}
 ?>