
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: UserValidation.php
* Description		: Perform database query to table "employee" in "leave_app" database for login purpose.
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: Login()
**************************************************************************************************************/

Class UserValidation extends CI_Model
{
	/**********************************************************************************************************
	* Description		: This function perform query to verify whether selected user exist in database".
	* 					: It is based on information received from controller.
	* 					: It will return result to controller if selected user exist.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $username - from function Index in controller ValidateLogin
	* 					: $password - from function Index in controller ValidateLogin
	* 					: $usertype - from function Index in controller ValidateLogin
	* Modification Log	: None
	**********************************************************************************************************/
	function Login($username, $password, $usertype)
	{
		$this -> db -> select('E_Username, E_Password, E_Id');
   		$this -> db -> from('employee');
   		$this -> db -> where('E_Username', $username);
   		$this -> db -> where('E_Password', $password);
   		$this -> db -> where('E_Usertype', $usertype);

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
}

/**************************************************************************************************************
* End of UserValidation.php
**************************************************************************************************************/
?>