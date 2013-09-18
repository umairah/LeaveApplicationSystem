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
		$data = array(
				'C_Name' => $C_Name,
		);
		
		$this->db->where('C_ID', $C_ID);
		$this->db->update('category', $data);
		
		// Produces:
		// UPDATE mytable
		// SET title = '{$title}', name = '{$name}', date = '{$date}'
		// WHERE id = $id
	}
	
 function process(){
                    $C_ID = $this->input->post('id');
                    $C_Name = $this->input->post('category');
                    $data = array(
                        'C_ID'=>$C_ID,
                        'C_Name'=>$C_Name,
                    );
                    $this->db->insert('category',$data);    
            }//end of simpan        
        }
?>

