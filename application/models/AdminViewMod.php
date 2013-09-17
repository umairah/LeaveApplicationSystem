<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class AdminViewMod extends CI_Model{
	function getData() 
	{
		$this->db->select('*');
		$this->db->from('Leave_form');
		$query = $this->db->get();
		return $query->result();
		
	}
}
?>