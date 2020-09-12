<?php

class M_laporan extends CI_Model {
	//show data
	function getData(){

		$query = $this->db->query("SELECT * FROM laporan")->result(); 
		return $query;
			
	}

	//CRUD MASTER USER

	function save_data(){

		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] 	 = '2048';
		$config['upload_path']	 = './assets/foto-upload/';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			echo 'gagal';
		}else {

			$upload = $this->upload->data();
			$image_name = $upload['file_name'];
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$encpass = sha1(md5($user).md5($pass));

			$data = [
					'nama_petugas' => $this->input->post('nama_petugas'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jk' => $this->input->post('jk'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'no_tlp' => $this->input->post('no_tlp'),
					'username' => $user,
					'password' => $encpass,
					'level' => $this->input->post('level'),
					'foto' => $image_name,
					

				];

	        $this->db->insert('petugas', $data);
    	}

	}

	function update_data($id){

		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] 	 = '2048';
		$config['upload_path']	 = './assets/foto-upload/';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			echo 'gagal';
		}else {

			$upload = $this->upload->data();
			$image_name = $upload['file_name'];
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$encpass = sha1(md5($user).md5($pass));

			$data = [
					'nama_petugas' => $this->input->post('nama_petugas'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jk' => $this->input->post('jk'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'no_tlp' => $this->input->post('no_tlp'),
					'username' => $user,
					'password' => $encpass,
					'level' => $this->input->post('level'),
					'foto' => $image_name,
					

				];
		}


		$this->db->where('id_petugas', $id);
		$this->db->update('petugas', $data);
			
	}

	function delete_data($id){
		$this->db->where('id_petugas', $id);
		$this->db->delete('petugas');
	}
}