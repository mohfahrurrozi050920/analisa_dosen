<?php

class M_Matakuliah extends CI_Model
{
	function tampil_data()
	{
		$sql = "SELECT matakuliah.*, dosen.nama as nama_dosen,mahasiswa.semester
        FROM matakuliah
        LEFT JOIN dosen ON dosen.id=matakuliah.id_dosen LEFT JOIN mahasiswa ON mahasiswa.id=matakuliah.id_mahasiswa";
		$query = $this->db->query($sql);
		return $query;
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
