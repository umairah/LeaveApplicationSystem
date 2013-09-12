<?php

Class User_validation extends CI_Model
{
	function login($username, $password, $usertype)
	{
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