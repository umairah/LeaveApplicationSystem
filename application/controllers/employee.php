<?php
class employee extends Controller{
	
	function employee()
	{
		parent::Controller();
	}
	
	function GetAll()
	{
		$this->load->model('employee_mod');
		
		$data['query']=$this->employee_mod->employee_getall();
		
		$this->view('employee_report', $data);
	}
	
}
?>

