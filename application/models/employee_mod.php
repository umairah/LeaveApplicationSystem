<?php 
class employee_mod extends Model{

	function employee_mod()
	{
		parent::Model();
	}
	
	function employee_getall()
	{
		$this->load->database();
		$query = $this->db->get('employee');
		$query = $this->db->get('category');
	    return $query->result();
	}
}
?>