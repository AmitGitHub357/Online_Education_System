<?php 
	/**
	 * 
	 */
	class City extends CI_Controller
	{
		public function index()
		{
			$this->load->model("CityModel");
			$data['Cities'] = $this->CityModel->GetAllCities();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("City/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("CityModel");
			$data['Cities'] = $this->CityModel->GetAllDeletedCities();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("City/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddCity()
		{
			$this->load->model("CityModel");
			if (isset($_REQUEST['AddCity'])) {
				$data['City_Name'] = $this->input->post("City");
			 	$data['State_id'] = $this->input->post("State");
			 	$data['City_Entry_Date'] = date('Y-m-d h:i:s');

			 	if ($this->CityModel->AddCity($data)) {
			 		echo "<script>";
			 		echo "alert('City Added Successfully')";
			 		echo "</script>";
			 	}
			}
				$this->load->model("StateModel");
				$data["States"] = $this->StateModel->GetAllState();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("City/AddCity", $data);
				$this->load->view("footer");
		}

		public function DeleteCity($id)
		{
			$this->load->model("CityModel");
			$this->CityModel->DeleteCity($id);
			redirect(base_url()."index.php/City");
		}

		public function UpdateCity($id)
		{
			$this->load->model("CityModel");	
			if (isset($_REQUEST['UpdateCity'])) {
				$data['City_Name'] = $this->input->post("City");
			 	$data['State_id'] = $this->input->post("State");
			 	$data['City_Update_Date'] = date('Y-m-d h:i:s');

			 	$this->CityModel->UpdateCity($id, $data);
			 	redirect(base_url()."index.php/City");
			}
			else
			{
				$this->load->model("StateModel");
				$data["States"] = $this->StateModel->GetAllState();
				$data['City'] = $this->CityModel->GetSingleCity($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("City/UpdateCity",$data);
				$this->load->view("footer");
			}
		}

		public function CityStatus($id, $status)
		{
			$this->load->model("CityModel");
			$data['City_Status'] = $status;
		 	$data['City_Update_Date'] = date('Y-m-d h:i:s');
			$this->CityModel->UpdateCity($id, $data);
			if ($status=='Active') {
				redirect(base_url()."index.php/City/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/City");
			}
			
		}
	}
 ?>