<?php 
	/**
	 * 
	 */
	class Event extends CI_Controller
	{
		public function index()
		{
			$this->load->model("EventModel");
			/*
			* update Event set Event_Status = 'Done' where Event_Date >= date();
			*/
			
			$this->EventModel->UpdateEventStatus();
			$data['Events'] = $this->EventModel->GetAllEvents();

			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Event/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("EventModel");
			$data['Events'] = $this->EventModel->GetAllDeletedEvents();

			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Event/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddEvent()
		{
			if (isset($_REQUEST['AddEvent'])) {
				$this->load->model("EventModel");
				$data['Event_Name'] = $this->input->post("Event_Name");
				$data['Event_Date'] = $this->input->post("Event_Date");
				$data['Event_Time'] = $this->input->post("Event_Time");
				$data['Event_Location'] = $this->input->post("Event_Location");
				$data['Event_Description'] = $this->input->post("Event_Description");
				$data['Event_Entry_Date'] = date('Y-m-d h:i:s');

				/*
				*	File Upload
				*/
				
				if ($file = $_FILES['Event_Image']['name']) {
					$tmp = $_FILES['Event_Image']['tmp_name'];
					$path = "Images/".$file;
					move_uploaded_file($tmp, $path);
					$data['Event_Image'] = $path;
				}
				
				/*
				*	File Upload
				*/
				$this->EventModel->AddEvent($data);
				redirect(base_url()."index.php/Event");
			}
			else
			{
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Event/AddEvent");
				$this->load->view("footer");
			}
		}

		public function UpdateEvent($id)
		{
			$this->load->model("EventModel");
			if (isset($_REQUEST['UpdateEvent'])) {
				
				$data['Event_Name'] = $this->input->post("Event_Name");
				$data['Event_Date'] = $this->input->post("Event_Date");
				$data['Event_Time'] = $this->input->post("Event_Time");
				$data['Event_Location'] = $this->input->post("Event_Location");
				$data['Event_Description'] = $this->input->post("Event_Description");
				$data['Event_Entry_Date'] = date('Y-m-d h:i:s');

				/*
				*	File Upload
				*/
				
				if ($file = $_FILES['Event_Image']['name'])
				{
					$tmp = $_FILES['Event_Image']['tmp_name'];
					$path = "Images/".$file;
					move_uploaded_file($tmp, $path);
					$data['Event_Image'] = $path;
				}
				/*
				*	File Upload
				*/
				$this->EventModel->UpdateEvent($id,$data);
				redirect(base_url()."index.php/Event");
			}
			else
			{
				$data['Event'] = $this->EventModel->GetSingleEvent($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Event/UpdateEvent",$data);
				$this->load->view("footer");
			}
		}

		public function DeleteEvent($id)
		{
			$this->load->model("EventModel");
			$data = $this->EventModel->GetSingleEvent($id);
			if (unlink(APPPATH.'Images/'.$data['Event_Image'])) {
				$this->EventModel->DeleteEvent($id);
				redirect(base_url().'index.php/Event');
			}
			else
			{
				echo "<script>";
	    		echo "alert('File Delete Failed')";
	    		echo "</script>";
			}
			
		}

		public function EventStatus($id,$status)
		{
			$this->load->model("EventModel");
			$data['Event_Status'] = $status;
			$this->EventModel->UpdateEvent($id, $data);
				redirect(base_url()."index.php/Event");
			
		}
	}
 ?>