<?php

class M_Dosen extends CI_Model
{
	function tampil_data()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('dosen');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
