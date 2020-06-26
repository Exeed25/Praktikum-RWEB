<?php

class m_data extends CI_Model{

	public function data_anggota(){
		$query = $this->db->query("SELECT*FROM anggota");
		return $query->result();
	}
	public function data_berita(){
		$query = $this->db->get('berita');
		return $query->result();
	}
	public function input_data($data){
        $this->db->insert('anggota', $data);
    }
    }



?>