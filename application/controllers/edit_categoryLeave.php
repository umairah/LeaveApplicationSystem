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
	
	function save()
	
	{
		$this->load->model('editcategorymodel');
		if ($this->input->post('submit'))
		{
			$dataNAME=$this->input->post('categoryname');
			$dataID=$this->input->post('categoryid');
			//print_r($data);
			//echo "<br/>";
			//print_r($dataID);
			//die();
			for($i=0; $i<sizeof($dataNAME); $i++)
			{
				//echo $data[$i];
				//echo $dataID[$i];
				$data = array(
						
						'C_Name'=>$dataNAME[$i],
				) ;
				$status=$this->editcategorymodel->process($dataID[$i],$data);
				//echo $status;
				$this->session->set_flashdata('status', $status);
				//echo $this->session->flashdata('status');
				//die();
			}
			//$this->editcategorymodel->process($data);
		}
		redirect('edit_categoryLeave');
	}
}
?>
