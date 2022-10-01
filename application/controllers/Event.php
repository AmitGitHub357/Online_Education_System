<?php 
	/**
	 * 
	 */
	class Event extends CI_Controller
	{
		public function index()
		{
			$this->load->model("EventModel");
			$data['Events'] = $this->EventModel->GetAllEvents();

			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Events",$data);
			$this->load->view("footer");
		}
	}
 ?>