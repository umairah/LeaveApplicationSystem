<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class AdminViewCon extends CI_Controller {

	public function index()
	{
		$this->load->model('AdminViewMod');
		$data['records'] = $this->AdminViewMod->getData();
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('AdminView',$data);
	}
	
	function redirect(){
		
	   $this->load->helper('url');
	 
		  redirect('PageAdmin');
	}

}
?>

