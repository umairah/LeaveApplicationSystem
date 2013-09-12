<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate_login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_validation');
	}
	
	function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');
		
		$data = $this->user_validation->login($username, $password, $usertype);
		
		if ($data) 
		{
			redirect ('session_controller', 'refresh');
			
			foreach ($data as $row)
			{
				$session_array = array ( 'username'  => $username,
					                     'password'  => $password,
										 'usertype'  => $usertype
						               );
			
				$this->session->set_userdata('logged_in', $session__array);
			}
			
			return TRUE;
		}
		
			else
			{
				echo "<script type='text/javascript'>alert('Invalid input. Please try again.')</script>";
				
				//$this->load->view('login_page');
				redirect('login_page');
				
				return FALSE;
			}
	}
}

?>