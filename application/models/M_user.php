<?php

class M_user extends CI_Model {
//fungsi cek session
    function logged_id(){
        return $this->session->userdata('user_id_cv');
        return $this->session->userdata('user_nama_cv');
        return $this->session->userdata('user_name_cv');
        return $this->session->userdata('user_status_cv');
    }

     function get_member_by_id($id){
    	return $this->db->get_where('user', array('id_user' => $id))->row();
    }
     function get_member_by_username($username){
    	return $this->db->get_where('user', array('username' => $username))->row();
    }

    public function register(){
		$cek = $this->db->query("SELECT * FROM tbl_petugas where username='".$this->input->post('username')."'")->num_rows();
        $image = "home1.png";
		if ($cek<=0){
			$username =$this->input->post('username');
			$pass = $this->input->post('password');
			$encpass = sha1(md5($username).md5($pass));

			$data = array(
			'nama_petugas' => $this->input->post('nama_petugas'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'username' => $this->input->post('username'),
			'password' => $encpass,
            'foto' => $image
			);

			try{

					return  $this->db->insert('tbl_petugas', $data);	
		 			echo '<script>alert("Register Berhasil!");</script>';
		 		 	redirect('admin/login','refresh');
		 		
		 		}catch(Exception $e){
			        $this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
		 			redirect('admin/register');
		 		}

		}else{
			echo '<script>alert("Username yang kamu masukkan sudah terdaftar!");</script>';
			redirect('admin/register','refresh');

		}

	}
}

?>