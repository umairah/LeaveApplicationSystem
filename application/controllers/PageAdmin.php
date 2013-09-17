
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: PageAdmin.php
* Description		: Load the admin main page
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index()
**************************************************************************************************************/

session_start();

class PageAdmin extends CI_Controller 
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
	}
	
	/**********************************************************************************************************
	* Description		: This function will validate if the user is authorized by checking the session data
	* 					  that obtained during successfull login
	* 					: If validation success, this function will load the admin main page
	* 					: If validation fail, user will be redirected back to login page
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function Index()
	{
		$session_data = $this->session->userdata('session_data');
		
		if(! $this->session->userdata('session_data'))
		{
			redirect ('Login');
		}
		
		else
		{
			$sess_data['username'] = $session_data['username'];
			
			$this->load->view('Admin/AdminMain', $sess_data);
		}
	}
}

/**************************************************************************************************************
* End of PageAdmin.php
**************************************************************************************************************/
?>