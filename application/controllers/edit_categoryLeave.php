
<?php
class edit_categoryLeave extends CI_Controller {

	public function index()
	{
		$this->load->model('editcategorymodel');
		$data['records'] = $this->editcategorymodel->getData();
		echo "List Of Category";
		//echo "<pre>";
		//print_r ($data['records']);
		//die();
		
		$this->load->view('edit_categoryview',$data,'');
	}
}
?>
