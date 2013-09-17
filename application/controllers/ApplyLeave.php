
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: ApplyLeave.php
* Description		: Manage the apply leave process made by the user
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index(), InsertLeaveDatabase()
**************************************************************************************************************/

session_start();

class ApplyLeave extends CI_Controller 
{
	/**********************************************************************************************************
	* Description		: To set some default values or run a default process when class is instantiated
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('LeaveModel');
	}

	/**********************************************************************************************************
	* Description		: This function will firstly check if the page is authorized by checking the session.
	* 					: If no session, it will terminate the process and redirect user to login page.
	* 					: If there is session, it will the load the apply leave form page.
	* 					: It also retreive the leave category data from database to be insert into category
	* 					  dropdown box in apply leave form page.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function Index()
	{
		if(! $this->session->userdata('session_data'))
		{
			redirect ('Login');
		}
		
		else
		{
			$category['category'] = $this->LeaveModel->GetCategory();
			
			$this->load->view('Worker/ApplyLeaveForm', $category);
		}				
	}
	
	/**********************************************************************************************************
	* Description		: This function will insert the leave application information made by user to database.
	*					: It receive the data from leave application form input.
	*					: Once insert process success, user will be redirected to the leave application status 
	*					  information page of that particular user.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $leave_category_type - textfield input from apply leave form
	* 					  $leave_start_date - textfield input from apply leave form
	* 					  $leave_end_date - textfield input from uform
	* 					  $leave_remark - textarea input from user update form
	* Modification Log	: None
	**********************************************************************************************************/
	function InsertLeaveDatabase() 
	{
		$leave_category_type = $this->input->post('slt_category_type');
		$leave_start_date = $this->input->post('txt_start_date');
		$leave_end_date = $this->input->post('txt_end_date');
		$leave_remark = $this->input->post('txa_remark');
		
		$insert = $this->LeaveModel->InsertLeave($leave_category_type, $leave_start_date, $leave_end_date, $leave_remark);
		
		redirect('CheckLeave');
	}
}

/**************************************************************************************************************
* End of ApplyLeave.php
**************************************************************************************************************/
?>