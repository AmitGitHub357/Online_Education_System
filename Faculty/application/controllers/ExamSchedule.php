<?php 
	/**
	 * 
	 */
	class ExamSchedule extends CI_Controller
	{
		public function index()
		{
			$this->load->model("ExamScheduleModel");
			$data['Exams'] = $this->ExamScheduleModel->GetAllExams();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("ExamSchedule/index",$data);
			$this->load->view("footer");
		}

		public function GetScheduleByCourse()
		{
			if (isset($_REQUEST['Course_id'])) {
				$id = $_REQUEST['Course_id'];
				$this->load->model("ExamScheduleModel");
				$data = $this->ExamScheduleModel->GetScheduleByCourse($id);
				$option = "";
				foreach ($data as $value) {
					$option .= "<option value=".$value['Exam_id'].">".$value['Exam_Type']." - ".$value['Exam_Date']."</option>";
				}
				echo $option;
			}
			
		}
	}
 ?>