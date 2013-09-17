
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: LeaveModel.php
* Description		: Perform all related database query for leave application process in "leave_app" database.
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: GetWorker(), UpdateUser()
**************************************************************************************************************/

Class LeaveModel extends CI_Model
{
	/**********************************************************************************************************
	* Description		: This function perform query to retrieve leave application information based on the 
	* 					  selected user from table "leave_form".
	* 					: The information is selected based on "username" and "user type".
	* 					: The "username" and "user type" information were obtained from session data.
	* 					: Result will be passed to controller in array.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function CheckLeaveStatus()
	{
		$session_data = $this->session->userdata('session_data');
		
		$leave_array = array();
		
		$this -> db -> select('Type, Start_date, End_date, Remark, Status, Date_apply');
   		$this -> db -> from('Leave_form');
   		$this -> db -> where('Applicant', $session_data['username']);
   		$this -> db -> order_by('Date_apply', 'desc');
   		
   		$query = $this -> db -> get();
   		
   		if ($query -> num_rows() > 0)
   		{
   			foreach ($query -> result_array() as $row)
			{
				$leave_array[] = $row;
			}
   		}
   		return $leave_array;
	}
	
	/**********************************************************************************************************
	* Description		: This function perform query to get leave category information from table "category".
	* 					: Result will be passed to controller in array.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function GetCategory()
	{
		$category_array = array();
		
		$this -> db -> select('C_Name, C_MaxDay');
		$this -> db -> from('category');
		
		$query = $this->db->get();
		
		if ($query -> num_rows() > 0) 
		{
			foreach ($query -> result_array() as $row)
			{
				$category_array[] = $row;
			}
		}
		return $category_array;
	}
	
	/**********************************************************************************************************
	* Description		: This function is to perform query to insert a new leave application information into
	* 					  table "leave_form".
	* 					: The "username" retrieved from session data will be used to be insert into column
	* 					  "Applicant" in table "leave_form".
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $leave_category_type - from function InsertLeaveDatabase in controller ApplyLeave
	* 					: $leave_start_date - from function InsertLeaveDatabase in controller ApplyLeave
	* 					: $leave_end_date - from function InsertLeaveDatabase in controller ApplyLeave
	* 					: $leave_remark - from function InsertLeaveDatabase in controller ApplyLeave
	* Modification Log	: None
	**********************************************************************************************************/
	function InsertLeave($leave_category_type, $leave_start_date, $leave_end_date, $leave_remark)
	{
		$this->load->helper('date');
		
		$session_data = $this->session->userdata('session_data');
		$username = $session_data['username'];
		
		$leave_data = array ( 'Type'       => $leave_category_type,
							  'Applicant'  => $username,
							  'Start_date' => $leave_start_date,
							  'End_date'   => $leave_end_date,
							  'Remark'     => $leave_remark,
							  'Status'     => 'Pending'
							);
		
		$this->db->set('Date_apply', 'NOW()', FALSE);
		$this->db->insert('Leave_form', $leave_data);
	}
}

/**************************************************************************************************************
* End of LeaveModel.php
**************************************************************************************************************/
?>