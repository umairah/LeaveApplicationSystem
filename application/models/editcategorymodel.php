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
	
	function UpdateCategory()
	{
		$data = array( 'C_Name' => $C_Name,);
		
		$this->db->where('C_ID', $C_ID);
		$this->db->update('category', $data);
		
		// Produces:
		// UPDATE mytable
		// SET title = '{$title}', name = '{$name}', date = '{$date}'
		// WHERE id = $id
	}
	
 function process($id="",$data=""){
                   
                   $this->db->where('C_ID', $id);
                   $query= $this->db->update('category',$data); 
                   return $query;
                       
            }//end of simpan        
        }
?>

