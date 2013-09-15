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
		

	function delete(){
		$this->load->model('deleteUser_model');
		if($this->input->post('delete')){
			$this->deleteUser_model->bin();
		}
		redirect('deleteUser');
	}

}

