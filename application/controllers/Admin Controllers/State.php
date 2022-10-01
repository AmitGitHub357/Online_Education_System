<?php 
	/**
	 * 
	 */
	class State extends CI_Controller
	{
		public function index()
		{
			$this->load->model("StateModel");
			$data["States"] = $this->StateModel->GetAllState();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("State/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("StateModel");
			$data["States"] = $this->StateModel->GetAllDeletedState();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("State/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddState()
		{
			$this->load->model("StateModel");
			if (isset($_REQUEST['AddState'])) {
				$name = $this->input->post("StateName");
				$data['State_Name'] = $name;
				$data['State_Entry_Date'] = date("Y-m-d h:i:s");
				$this->StateModel->AddState($data);
			}
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("State/AddState");
				$this->load->view("footer");
		}

		public function DeleteState($id)
		{
			$this->load->model("StateModel");
			$this->StateModel->DeleteState($id);
			redirect(base_url()."index.php/State");
		}

		public function UpdateState($id)
		{
			
			$this->load->model("StateModel");
			
			if (isset($_REQUEST['UpdateState'])) {
				$name = $this->input->post("StateName");
				$data['State_Name'] = $name;
				$data['State_Update_Date'] = date("Y-m-d h:i:s");

				$this->StateModel->UpdateState($data,$id);
				redirect(base_url()."index.php/State");
			}
			else
			{
				$data['State'] = $this->StateModel->GetSingleState($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("State/UpdateState",$data);
				$this->load->view("footer");
			}
		}

		public function StateStatus($id, $status)
		{
			$this->load->model("StateModel");
			$data['State_Status'] = $status;
			$data['State_Update_Date'] = date("Y-m-d h:i:s");
			$this->StateModel->UpdateState($data,$id);
			if ($status=='Active') {
				redirect(base_url()."index.php/State/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/State");
			}
			
		}
	}
 ?>

