<?php 

class EditUser extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model('editUser_model');
		$data['records'] = $this->editUser_model->getData();
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('editUserView',$data,false); 
	}
		
		
	

	function save(){
		$this->load->model('editUser_model');
		if($this->input->post('submit')){
			$this->editUser_model->process();
		}
		redirect('editUser');
	}

	function delete(){
		$this->load->model('editUser_model');
		if($this->input->post('delete')){
			$this->editUser_model->bin();
		}
		redirect('editUser');
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
