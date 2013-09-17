<?php
class edit_categoryLeave extends CI_Controller {

	public function index()
	{
		$this->load->model('editcategorymodel');
		$data['records'] = $this->editcategorymodel->getData();
		
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('edit_categoryview',$data,'');
	}
	
	function delete($leave_id)
	{
		$this->load->model('editcategorymodel');
		$this->editcategorymodel->bin($leave_id);
		
		redirect('edit_categoryLeave');
	}
	
}
?>
