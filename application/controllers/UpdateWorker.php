
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************************************************************************************************
* File Name			: UpdateWorker.php
* Description		: Update selected user information
* Author			: Alif Ridzuan Bin Khairuddin
* Date				: 16 September 2013
* Version			: 0.0
* Modification Log	: None
* Function List		: __construct(), Index(), UpdateWorkerDatabase()
**************************************************************************************************************/

session_start();

class UpdateWorker extends CI_Controller 
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
	* 					: If there is session, it will the retrieve information of the selected user from the 
	* 					  database.
	* 					: Once the selected data is successfully retrieved, the result will be inserted to the
	* 					  user update form textfield. 
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
			$result['worker_update'] = $this->WorkerModel->GetWorker();
				
			$this->load->view('Worker/UpdateWorkerProfile', $result);
		}
	}
	
	/**********************************************************************************************************
	* Description		: This function will update the selected user information to database.
	*					: It receive the data from update user form input.
	*					: Once update process success, user will be redirected to the view profile page of that
	*					  particular user.
	* Author			: Alif Ridzuan Bin Khairuddin
	* Date				: 16 September 2013
	* Input Parameter	: $update_password - textfield input from user update form
	* 					  $update_fullname - textfield input from user update form
	* 					  $update_address - textarea input from user update form
	* 					  $update_phone - textfield input from user update form
	* 				 	  $update_email - textfield input from user update form
	* 					  $update_position - textfield input from user update form
	* Modification Log	: None
	**********************************************************************************************************/
	function UpdateWorkerDatabase() 
	{
		$update_password = $this->input->post('txt_update_password');
		$update_fullname = $this->input->post('txt_update_fullname');
		$update_address = $this->input->post('txa_update_address');
		$update_phone = $this->input->post('txt_update_phone');
		$update_email = $this->input->post('txt_update_email');
		$update_position = $this->input->post('txt_update_position');
		
		$update = $this->WorkerModel->UpdateUser($update_password, $update_fullname, $update_address, $update_phone, $update_email, $update_position);
		
		redirect('GetWorkerProfile');
	}
}

/**************************************************************************************************************
* End of UpdateWorker.php
**************************************************************************************************************/
?>