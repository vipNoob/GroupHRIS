<?php 
	if(!defined('BASEPATH')) exit('No direct script access allowed!');

class UserCAHistory extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('cash_advance_model');
	}

	public function index(){
		if($this->session->userdata('emp_id')){
			if($this->session->userdata('type')!='1'){
			$data['title'] = "Dashboard";
			$data['proposals'] = "";
			$data['payslip'] = "";
			$data['proposalsList'] = "";
			$data['active201'] = "";
			$data['activeDash'] = "";
			$data['active201View']= ""; 
			$data['salaryConfig']= ""; 
			$data['leaveRequest']= "";
			$data['leaveHistory']= "";
			$data['leaveIncentives']= "";
			$data['leaveSummary']= "";
			$data['OtRequestForm']= "";
			$data['OtHistory']= "";
			$data['viewSuspension']= "";
			$data['suspendEmployee']= "";
			$data['cashAdvance']= "";
			$data['cashAdvanceHistory']= "active";
			$data['otherLoans']= "";
			$data['otherLoansHistory']= "";
			$data['calendar']= "";
			$data['holiday']= "";
			$data['holidayList']= "";
			$data['leaveHistoryForm']= "";
			$data['OtRequestFormHIstory']= "";	
			$data['cashAdvanceHistory']= "active";	
			$data['setting']= "";
			$data['sess_email'] = $this->session->userdata('email');
			// $data['email'] = $this->session->userdata('email');
			$this->load->view("common/head",$data);
			$this->load->view("common/header");
			$this->load->view("common/userNav");
			$data['data'] = $this->cash_advance_model->getRequest();
			$this->load->view('users/cashadvancehistory', $data);
			$this->load->view('common/foot');
			$this->load->view('common/footer');
			}else{
			redirect('Dashboard');
		}

	}else{
			redirect('/');
		}
	}
}
?>
