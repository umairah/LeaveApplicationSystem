
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: WorkerModel.php
* Description		: Perform all related database query to table "employee" in "leave_app" database.
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: GetWorker(), UpdateUser()
**************************************************************************************************************/

Class WorkerModel extends CI_Model
{
	/**********************************************************************************************************
	* Description		: This function perform query to get selected user information from table "employee".
	* 					: user information is selected based on "username" and "user type".
	* 					: The "username" and "user type" information were obtained from session data.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function GetWorker()
	{	
		$session_data = $this->session->userdata('session_data');
		
		$this -> db -> select('*');
   		$this -> db -> from('employee');
   		$this -> db -> where('E_Username', $session_data['username']);
   		$this -> db -> where('E_Usertype', $session_data['usertype']);
   		$this -> db -> limit(1);

   		$query = $this -> db -> get();

   		if ($query -> num_rows() == 1)
     	{
     		return $query->result();
     	}
     		else
        	{
        		return false;
        	}
	}
	
	/**********************************************************************************************************
	* Description		: This function perform query to update selected user information at table "employee".
	* 					: user information is updated based on "username" and "user type".
	* 					: The "username" and "user type" information were obtained from session data.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $update_password - from function UpdateWorkerDatabase in controller UpdateWorker
	* 					: $update_fullname - from function UpdateWorkerDatabase in controller UpdateWorker
	* 					: $update_address - from function UpdateWorkerDatabase in controller UpdateWorker
	* 					: $update_phone - from function UpdateWorkerDatabase in controller UpdateWorker
	* 					: $update_email - from function UpdateWorkerDatabase in controller UpdateWorker
	* 					: $update_position - from function UpdateWorkerDatabase in controller UpdateWorker
	* Modification Log	: None
	**********************************************************************************************************/
	function UpdateUser($update_password, $update_fullname, $update_address, $update_phone, $update_email, $update_position)
	{
		$session_data = $this->session->userdata('session_data');
		
		$update_data = array ( 'e_password' => $update_password,
							   'e_fullname' => $update_fullname,
							   'e_address' => $update_address,
							   'e_phone' => $update_phone,
							   'e_email' => $update_email,
							   'e_position' => $update_position
							 );
		
		$this -> db -> where('E_Username', $session_data['username']);
		$this -> db -> where('E_Usertype', $session_data['usertype']);
		
		$this -> db -> update('employee', $update_data);
	}
}

/**************************************************************************************************************
* End of WorkerModel.php
**************************************************************************************************************/
?>