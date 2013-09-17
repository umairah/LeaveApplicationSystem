<?php 

class DeleteUser extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model('deleteUser_model');
		$data['records'] = $this->deleteUser_model->getData();
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('deleteUserView',$data,false); 
	}
		

	function delete($user_id){
		//$user_id=$this->uri->segment(2);
		$this->load->model('deleteUser_model');
		//$user_id = $this->input->post('txt_id');
		$this->deleteUser_model->bin($user_id);
		
		redirect('deleteUser');
	}

}

