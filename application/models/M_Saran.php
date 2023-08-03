<?php

class M_Saran extends CI_Model
{
	function tampil_data()
	{
		$sql = "SELECT saran.*, mahasiswa.nama,mahasiswa.semester,matakuliah.matakuliah,dosen.nama as nama_dosen
	    FROM saran
	    LEFT JOIN mahasiswa ON mahasiswa.id=saran.id_mahasiswa LEFT JOIN matakuliah ON matakuliah.id=saran.id_matakuliah LEFT JOIN dosen ON dosen.id=matakuliah.id";
		$query = $this->db->query($sql);
		return $query;
	}


	function tampil_data_evaluasi()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('pernyataan_evaluasi');
	}
	



}
