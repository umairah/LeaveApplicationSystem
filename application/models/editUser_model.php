<?php
class editUser_model extends Model{

	function editUser_model()
	{
		parent::Model();
	}

	function process(){
		$E_Username = $this->input->post('username');
		$E_Password = $this->input->post('password');
		$E_FullName = $this->input->post('fullname');
		$E_Address = $this->input->post('address');
		$E_PhoneNo = $this->input->post('phone');
		$E_Email = $this->input->post('email');
		$E_Position = $this->input->post('position');
		
		$data = array(
				'E_Username'=>$E_Username,
				'E_Password'=>$E_Password,
				'E_FullName'=>$E_FullName,
				'E_Address'=>$E_Address,
				'E_PhoneNo'=>$E_PhoneNo,
				'E_Email'=>$E_Email,
				'E_Position'=>$E_Position
				
		);
		$this->db->insert('employee',$data);
	}
	
	/*
	function editUser_getall()
	{
		$this->load->database();
		$query = $this->db->get('employee');
		return $query->result();
	} */
}
?>