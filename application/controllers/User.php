<?php
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("m_user");
			$this->load->library('session');
		}

		function index(){
		if ($this->session->has_userdata('user_id_cv')) {

        	$this->load->view("user/home");         

	    } else {

	       $this->load->view("login");     

			}
	    }

		function register() {
			$this->load->view('register.php');
		}

		 function proses_register(){
			// validation form
		 	$this->form_validation->set_rules('nama_petugas','Nama Lengkap','required');
		 	$this->form_validation->set_rules('alamat','Alamat','required');
		 	$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		 	$this->form_validation->set_rules('username','Username','required');
		 	$this->form_validation->set_rules('password','Password','required|min_length[5]|matches[confirm_password]');
		 	$this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[password]');

		 	if($this->form_validation->run() == FALSE){
		 		$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
		 		redirect('admin/register');
		 	}else{
			 		$this->m_user->register();
			        $this->session->set_flashdata('sukses','Berhasil Register!');
		 		 	redirect('admin/login');
		 	}
		}


		function login() {
			$this->load->view('login_admin.php');
		}

		function proses_login(){
			
			if($this->m_user->logged_id()){
			//jika session sdh terdaftar, langsung ke dashboard
			redirect("user");

			}else{

			//jika session blm terdaftar

			//set form validation
			$this->form_validation->set_rules('username', 'Username','required');
			$this->form_validation->set_rules('password', 'Password','required');

			//set message form validation
	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

			 		//jika benar
					if ($this->form_validation->run() == TRUE) {

			 		//get data dari form
			 		$username = $this->input->post("username", TRUE);
					$password =  $this->input->post("password", TRUE);
					// $encpass = sha1(md5($username).md5($password));

					$con['username'] = $username;

					$checkLogin = $this->m_user->get_member_by_username($username); 

					if($checkLogin != FALSE){
						 if ($password == ($checkLogin->password)) {
						         $this->session->set_userdata( array(
			                        'user_id_cv'     => $checkLogin->id_user,
			                        'user_nama_cv'   => $checkLogin->nama,
			                        'user_name_cv'   => $checkLogin->username,
			                        'user_pass_cv' => $checkLogin->password,
			                        'user_status_cv' => $checkLogin->status,
			                        'user_logged_in_cv' => TRUE
			                    ));
			                    
						         	$this->session->set_flashdata('success','Selamat datang!');
						         	redirect('user');
						     	
						    } else {
						        $this->session->set_flashdata('message', 'Password Salah!');          
			        			redirect('welcome/login');
						    }
					}else{
						$this->session->set_flashdata('message', 'Username tidak ditemukan');          
			        	redirect('welcome/login');
			        }
			    }
		}
	}

	public function logout()
    {
    	$checkLogin = $this->m_user->get_member_by_username($username); 

        $newdata = array(
        			'user_id_pg'     => $checkLogin->id,
			        'user_nama_pg'   => $checkLogin->nama_petugas,
			        'user_name_pg'   => $checkLogin->username,
			        'user_pass_pg' => $checkLogin->password,
			        'user_foto_pg' => $checkLogin->foto,
			        'user_logged_in_pg' => TRUE
         );
	
     	$this->session->unset_userdata($newdata);
     	$this->session->sess_destroy();
        redirect('user');
    }


}

	
?>