<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Session_controller extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	function session_check()
 	{
 		if($this->session->userdata('logged_in'))
 		{
 			$session_data = $this->session->userdata('logged_in');
     		$data['username'] = $session_data['username'];
     		
     		switch ('usertype') 
     		{
     			case 1: $this->load->view('admin/admin_main', $data);
     			break;
     			
     			case 2: $this->load->view('worker/worker_main', $data);
     			break;
     		}
   		}
   		
   		else
   		{
   			//If no session, redirect to login page
     		redirect ('login', 'refresh');
   		}
 	}

 	function logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		$this->load->view('login_page', 'refresh');
 	}
}

?>

