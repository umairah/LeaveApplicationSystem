
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: GetWorkerProfile.php
* Description		: Retrieve selected user information
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index()
**************************************************************************************************************/

session_start();

class GetWorkerProfile extends CI_Controller 
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
		$this->load->model('WorkerModel');
	}
	
	/**********************************************************************************************************
	* Description		: This function will firstly check if the page is authorized by checking the session.
	* 					: If no session, it will terminate the process and redirect user to login page.
	* 					: If there is session, it will retrieve the information of the selected user from the 
	* 					  database.
	* 					: Once the selected data is successfully retrieved, the result will be displayed to 
	* 					  be view.
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
			$get_result['worker_data'] = $this->WorkerModel->GetWorker();
		
			$this->load->view('Worker/ViewWorkerProfile', $get_result);
		}	
	}
}

/**************************************************************************************************************
* End of GetWorkerProfile.php
**************************************************************************************************************/
?>