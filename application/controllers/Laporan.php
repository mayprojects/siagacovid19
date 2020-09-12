<?php

class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("m_laporan");
	}

	//function halaman menu
	public function index()
	{
		$data["laporan"] = $this->m_laporan->getData();
		$this->load->view("user/laporan/data",$data);
	}

	public function input(){
		$this->load->view("page/input");
	}

	public function tampil(){
		$data["data_petugas"] = $this->m_master->getData();
		$this->load->view("page/data",$data);
	}

	public function edit($id){
		$data['data_petugas'] = $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
		$this->load->view("page/edit",$data);
	}

	public function detail($id){
		$data['data_petugas'] = $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
		$this->load->view("page/detail",$data);
	}

	//function insert
	function tambah_data(){
		$this->form_validation->set_rules('nama_petugas', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_tlp', 'No. Telepon', 'required|numeric|regex_match[/^[0-9]{12}$/]');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]|matches[confirm_pass]');
		$this->form_validation->set_rules('confirm_pass','Confirm Password','required|min_length[5]|matches[password]');


		$this->cek_noUser();

   		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
			redirect('dashboard/input');
		}
		else {
			$this->m_master->save_data();
			$this->session->set_flashdata('success','Data Berhasil Disimpan!');
			redirect('dashboard/tampil');
		}
	}

	function cek_noUser(){
	 		$cek_no = $this->input->post('no_tlp');

	 		$this->db->select('no_tlp');
	 		$this->db->from('petugas');
	 		$this->db->where('no_tlp',$cek_no);
	 		$query = $this->db->get();

	 		$num = $query->num_rows();
	 			if($num > 0){
	 				$this->session->set_flashdata('error','Nomor yang diinput kan sudah terdaftar!');
	 				redirect('dashboard/input','refresh');
	 			}else{
	 				return TRUE;
	 			}
	 	}

		function edit_data($id){
			$this->form_validation->set_rules('nama_petugas', 'Nama', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('no_tlp', 'No. Telepon', 'required|numeric|regex_match[/^[0-9]{12}$/]');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]|matches[confirm_pass]');
			$this->form_validation->set_rules('confirm_pass','Confirm Password','required|min_length[5]|matches[password]');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('dashboard/edit($id)');
			}
			else {
				$this->m_master->update_data($id);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('dashboard/tampil');
			}
		}

		function hapus_data($id){
			$this->m_master->delete_data($id);
			$this->session->set_flashdata('success','Data Berhasil Dihapus!');
			redirect('dashboard/tampil');
		}		

}

?>