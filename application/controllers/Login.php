
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: Login.php
* Description		: Perform system login
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index()
**************************************************************************************************************/

class Login extends CI_Controller 
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
	* Description		: Load the system login interface
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: None
	* Modification Log	: None
	**********************************************************************************************************/
	function Index()
	{
		$this->load->helper(array('form'));
		$this->load->view('LoginPage');
	}
}

/**************************************************************************************************************
* End of Login.php
**************************************************************************************************************/
?>