<?php
class EditUser_model extends CI_Model{
/*
	function editUser_model()
	{
		parent::Model();
	}
*/
	
	function process(){
		$E_Id = $this->input->post('id');
		$E_Username = $this->input->post('username');
		$E_Password = $this->input->post('password');
		$E_FullName = $this->input->post('fullname');
		$E_Address = $this->input->post('address');
		$E_Phone = $this->input->post('phone');
		$E_Email = $this->input->post('email');
		$E_Position = $this->input->post('position');
		$E_Usertype = $this->input->post('usertype');
		
		$data = array(
				
				'E_Id'=>$E_Id,
				'E_Password'=>$E_Password,
				'E_FullName'=>$E_FullName,
				'E_Address'=>$E_Address,
				'E_Phone'=>$E_Phone,
				'E_Email'=>$E_Email,
				'E_Position'=>$E_Position,
				'E_Usertype'=>$E_Usertype);
		
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