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

		public function DeletedData()
		{
			$this->load->model("ExamScheduleModel");
			$data['Exams'] = $this->ExamScheduleModel->GetAllDeletedExams();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("ExamSchedule/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddExam()
		{
			$this->load->model("ExamScheduleModel");

			if (isset($_REQUEST['AddExam'])) {
				$data['Exam_Name'] = $this->input->post("Exam_Name");
				echo $data['Exam_Date'] = $this->input->post("Exam_Date")." ".$this->input->post("Exam_Time");
				$data['Course_id'] = $this->input->post("Course_id");
				$data['Exam_Entry_Date'] = date('Y-m-d h:i:s');
				$data['Exam_Status'] = 'Pending';

				$this->ExamScheduleModel->AddExam($data);
			}
				$this->load->model("CourseModel");
				$this->load->model("ExamTypeModel");
				$data['Courses'] = $this->CourseModel->GetAllCourses();
				$data['ExamTypes'] = $this->ExamTypeModel->ShowAllExamTypes();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("ExamSchedule/AddExam",$data);
				$this->load->view("footer");
			
		}

		public function DeleteExam($id)
		{
			$this->load->model("ExamScheduleModel");
			$this->ExamScheduleModel->DeleteExam($id);
			redirect(base_url()."index.php/ExamSchedule");
		}

		public function UpdateExamSchedule($id)
		{
			$this->load->model("ExamScheduleModel");

			if (isset($_REQUEST['UpdateExam'])) {
				$data['Exam_Name'] = $this->input->post("Exam_Name");
				echo $data['Exam_Date'] = $this->input->post("Exam_Date")." ".$this->input->post("Exam_Time");
				$data['Course_id'] = $this->input->post("Course_id");
				$data['Exam_Update_Date'] = date('Y-m-d h:i:s');

				$this->ExamScheduleModel->UpdateExam($id, $data);
				redirect(base_url()."index.php/ExamSchedule");
			}
			else
			{
				$this->load->model("CourseModel");
				$this->load->model("ExamTypeModel");
				$data['Courses'] = $this->CourseModel->GetAllCourses();
				$data['ExamTypes'] = $this->ExamTypeModel->ShowAllExamTypes();
				$data['Exam'] = $this->ExamScheduleModel->GetSingleExam($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("ExamSchedule/UpdateExam",$data);
				$this->load->view("footer");
			}
		}

		public function ExamStatus($id, $status)
		{
			$this->load->model("ExamScheduleModel");
			$data['Exam_Status'] = $status;
			$data['Exam_Update_Date'] = date('Y-m-d h:i:s');
			$this->ExamScheduleModel->UpdateExam($id,$data);

			if ($status=='Active') {
				redirect(base_url()."index.php/ExamSchedule/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/ExamSchedule");
			}
			
		}
	}
 ?>