<?php
class DeleteUser_model extends CI_Model{

	 

	function getData() 
	{
		$this->db->select('E_Id');
		$this->db->select('E_Username');
		$this->db->select('E_FullName');
		$this->db->select('E_Email');
		$this->db->select('E_Address');
		
		$this->db->from('employee');
		$query = $this->db->get();
		return $query->result();
	}

	
	function bin($user_id)
	{
		$this->db->where('E_Id', $user_id);
		$this->db->delete('employee');
	}
	
}
?>
