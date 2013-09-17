
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: ValidateLogin.php
* Description		: Perform user login validation
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index()
**************************************************************************************************************/

class ValidateLogin extends CI_Controller 
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
		$this->load->model('UserValidation');
	}
	
	/**********************************************************************************************************
	* Description		: This function will validate if the user correctly input their login information from
	* 					  login form by comparing the input with the database.
	* 					: If the validation success, session is created and user will be redirected to targeted
	* 					  page based on their user type.
	* 					: If the validation fail, system will notify user and redirect user back to login page.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $username - textfield input from login form
	* 					: $password - textfield input from login form
	* 					: $usertype - radio button input from login form
	* Modification Log	: None
	**********************************************************************************************************/
	function Index()
	{
		$username = $this->input->post('txt_username');
		$password = $this->input->post('txt_password');
		$usertype = $this->input->post('rb_usertype');
		
		$data = $this->UserValidation->Login($username, $password, $usertype);
				
		if ($data) 
		{
			$session_array = array ( 'username'  => $username,
									 'usertype'  => $usertype,
					               );
			
			$this->session->set_userdata('session_data', $session_array);
			
			switch ($usertype)
			{
				case 1  : redirect ('PageAdmin');
				break;
				
				default : redirect ('PageWorker');
				break;
			}
						
			return TRUE;
		}
		
			else
			{
				echo "<script type='text/javascript'>alert('Invalid input. Please try again.')</script>";
				$this->load->view('LoginPage');
				
				return FALSE;
			}
	}
}

/**************************************************************************************************************
* End of ValidateLogin.php
**************************************************************************************************************/
?>