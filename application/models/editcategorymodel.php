<?php 
class editcategorymodel extends CI_Model{
	function getData() 
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}
	
	function bin($leave_id)
	{
		$this->db->where('C_ID', $leave_id);
		$this->db->delete('category');
	}
	
	function update(){
		
		
		
		
	}
	
}
?>
