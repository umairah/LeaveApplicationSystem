<?php 
class editcategorymodel extends CI_Model{
	function getData() 
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}
}
?>