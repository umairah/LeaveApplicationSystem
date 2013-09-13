<?php 
class employee_mod extends CI_Model{
	function getData() 
	{
		$this->db->select('*');
		$this->db->from('Leave_form');
		$query = $this->db->get();
		return $query->result();
	}
}
?>