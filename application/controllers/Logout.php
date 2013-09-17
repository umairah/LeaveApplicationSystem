
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: Logout.php
* Description		: Perform system logout
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index()
**************************************************************************************************************/

class Logout extends CI_Controller 
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
	}
	
	/**********************************************************************************************************
	* Description		: Destroy all session and redirect user back to Login.php
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function Index()
	{
		$this->session->unset_userdata('session_data');
		$this->session->sess_destroy();
		redirect('Login');
	}
}

/**************************************************************************************************************
* End of Logout.php
**************************************************************************************************************/
?>