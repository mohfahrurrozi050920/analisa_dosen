<?php

class M_Pertanyaan extends CI_Model
{
	function tampil_data()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('pertanyaan_kuesioner');
	}


	function tampil_data_evaluasi()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('pernyataan_evaluasi');
	}
	function tampil_saran()
	{
		$sql = "SELECT matakuliah.*, dosen.nama as nama_dosen,mahasiswa.semester
	    FROM matakuliah
	    LEFT JOIN dosen ON dosen.id=matakuliah.id_dosen LEFT JOIN mahasiswa ON mahasiswa.id=matakuliah.id_mahasiswa";
		$query = $this->db->query($sql);
		return $query;
	}




}
