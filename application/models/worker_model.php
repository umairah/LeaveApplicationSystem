<?php

Class worker_model extends CI_Model
{
	function view_user($username, $password, $usertype)
	{
		$username = $this->input->post('username');
		
		$this -> db -> select('E_Username, E_Password, E_Id');
   		$this -> db -> from('employee');
   		$this -> db -> where('E_Username', $username);
   		$this -> db -> where('E_Password', $password);
   		$this -> db -> where('E_Id', $usertype);

   		$query = $this -> db -> get();

   		if ($query -> num_rows() == 1)
     	{
     		return $query->result();
     	}
     		else
        	{
        		return false;
        	}
	}
	
	function update_user($username, $password, $usertype)
	{
		$username = $this->input->post('username');
	
		$this -> db -> select('E_Username, E_Password, E_Id');
		$this -> db -> from('employee');
		$this -> db -> where('E_Username', $username);
		$this -> db -> where('E_Password', $password);
		$this -> db -> where('E_Id', $usertype);
	
		$query = $this -> db -> get();
	
		if ($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}

?>