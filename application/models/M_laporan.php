<?php

class M_laporan extends CI_Model {
	//show data
	function getData(){

		$query = $this->db->query("SELECT * FROM laporan")->result(); 
		return $query;
			
	}

	//CRUD MASTER USER

	function save_data(){


		$data = [
				'user' => $this->input->post('user'),
				'nama_pasien' => $this->input->post('nama_pasien'),
				'alamat' => $this->input->post('alamat'),
				'gejala' => $this->input->post('gejala'),
				'rujukan' => $this->input->post('rujukan'),
				'status' => $this->input->post('status')
				

			];

        $this->db->insert('laporan', $data);
    	

	}

	function update_data($id){

		
			$data = [
				'user' => $this->input->post('user'),
				'nama_pasien' => $this->input->post('nama_pasien'),
				'alamat' => $this->input->post('alamat'),
				'gejala' => $this->input->post('gejala'),
				'rujukan' => $this->input->post('rujukan'),
				'status' => $this->input->post('status')
					

				];
		


		$this->db->where('id_laporan', $id);
		$this->db->update('laporan', $data);
			
	}

	function delete_data($id){
		$this->db->where('id_laporan', $id);
		$this->db->delete('laporan');
	}
}