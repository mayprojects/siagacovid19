<?php

class M_berita extends CI_Model {
	//show data
	function getData(){

		$query = $this->db->query("SELECT * FROM berita")->result(); 
		return $query;
			
	}

	//CRUD MASTER USER

	function save_data(){
		
		$data = [
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'user' => $this->input->post('user')
			];

	        $this->db->insert('berita', $data);
    	

	}

	function update_data($id){

		
		$data = [
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'user' => $this->input->post('user')
			];


		$this->db->where('id_berita', $id);
		$this->db->update('berita', $data);
			
	}

	function delete_data($id){
		$this->db->where('id_berita', $id);
		$this->db->delete('berita');
	}
}