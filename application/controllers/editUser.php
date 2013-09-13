<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditUser extends CI_Controller {

	
	public function index()
	{
		$this->load->view('editUserView');
		
	}

	function save(){
		$this->load->model('editUser_model');
		if($this->input->post('submit')){
			$this->editUser_model->process();
		}
		redirect('employee');
	}

	/*
	function GetAll()
	{
		$this->load->model('editUser_model');
	
		$data['query']=$this->editUser_model->editUser_getall();
	
		$this->view('editUserView', $data);
	}
	
	*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */