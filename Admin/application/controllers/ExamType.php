<?php 
	/**
	 * 
	 */
	class ExamType extends CI_Controller
	{
		public function index()
		{
			$this->load->model("ExamTypeModel");
			$data['ExamTypes'] = $this->ExamTypeModel->ShowAllExamTypes();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("ExamType/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("ExamTypeModel");
			$data['ExamTypes'] = $this->ExamTypeModel->ShowAllDeletedExamTypes();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("ExamType/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddExamType()
		{
			if (isset($_REQUEST['AddExamType'])) {
				$data['Exam_Type'] = $_REQUEST['ExamType'];
				$data['Exam_Type_Entry_Date'] = date('Y-m-d h:i:s');
				$data['Exam_Type_Update_Date'] = date('Y-m-d h:i:s');
				$this->load->model("ExamTypeModel");
				$this->ExamTypeModel->AddExamType($data);
			}
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("ExamType/AddExamType");
				$this->load->view("footer");
			
		}

		public function DeleteExamType($id)
		{
			$this->load->model("ExamTypeModel");
			$this->ExamTypeModel->DeleteExamType($id);
			redirect(base_url()."index.php/ExamType");
		}

		public function UpdateExamType($id)
		{
			$this->load->model("ExamTypeModel");
			if (isset($_REQUEST['UpdateExamType'])) {
				$data['Exam_Type'] = $_REQUEST['ExamType'];
				$data['Exam_Type_Update_Date'] = date('Y-m-d h:i:s');
				$this->ExamTypeModel->UpdateExamType($id,$data);
				redirect(base_url()."index.php/ExamType");
			}
			else
			{
				$data['ExamType'] = $this->ExamTypeModel->ShowSingleExamType($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("ExamType/UpdateExamType",$data);
				$this->load->view("footer");
			}	
		}

		public function ExamTypeStatus($id,$status)
		{
			$this->load->model("ExamTypeModel");
			$data['Exam_Type_Status'] = $status;
			$data['Exam_Type_Update_Date'] = date('Y-m-d h:i:s');
			$this->ExamTypeModel->UpdateExamType($id,$data);
			if ($status=='Active') {
				redirect(base_url()."index.php/ExamType/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/ExamType");
			}
			
		}
	}
 ?>