<?php

class M_Kuesioner extends CI_Model
{
	function tampil_data()
	{
		$sql = "SELECT dosen.*
	    FROM dosen
	    -- LEFT JOIN nilai_kuesioner ON nilai_kuesioner.id_dosen=dosen.id 
	    -- LEFT JOIN matakuliah ON matakuliah.id_dosen=dosen.id 
		-- LEFT JOIN mahasiswa ON mahasiswa.id=matakuliah.id_mahasiswa
		
		";
		
		$query = $this->db->query($sql);
		return $query;
	}

}
