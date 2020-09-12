<?php

class M_berita extends CI_Model {
	//show data
	function getData(){

		$query = $this->db->query("SELECT * FROM berita")->result(); 
		return $query;
			
	}

	function getDash(){

		$query = $this->db->query("SELECT * FROM berita limit 2")->result(); 
		return $query;
			
	}

	//CRUD MASTER USER

	function save_data(){
		$img = '1.jpg';
		$data = [

				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'user' => $this->input->post('user'),
				'tgl' => $this->input->post('tgl'),
				'foto' => $img
			];

	        $this->db->insert('berita', $data);
    	

	}

	function update_data($id){

		$img = '1.jpg';
		$data = [
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'user' => $this->input->post('user'),
				'tgl' => $this->input->post('tgl'),
				'foto' => $img
			];


		$this->db->where('id_berita', $id);
		$this->db->update('berita', $data);
			
	}

	function delete_data($id){
		$this->db->where('id_berita', $id);
		$this->db->delete('berita');
	}
}