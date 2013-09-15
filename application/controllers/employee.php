<?php
class employee extends CI_Controller {

	public function index()
	{
		$this->load->model('employee_mod');
		$data['records'] = $this->employee_mod->getData();
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('employee_report',$data,'');
	}
	
	//function form()
	//{
		//$formSubmit=$this->input->post('submitForm');
		//if($formSubmit == 'formSaveNew');
		//redirect($this->config->item('backend_folder'). '/categories');
	//}
}
?>


