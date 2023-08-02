<?php

class User extends CI_Model
{
	
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}


}
