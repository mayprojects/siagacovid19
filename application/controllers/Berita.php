<?php

class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("m_berita");
	}

	//function halaman menu
	public function index()
	{
		
		$data["berita"] = $this->m_berita->getData();
		$this->load->view("user/berita/data",$data);
	}

	public function input(){
		$data["tgl"] = date("d-m-Y");
		$this->load->view("user/berita/input",$data);
	}

	public function edit($id){
		$data['data_berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
		$this->load->view("user/berita/edit",$data);
	}

	public function detail($id){
		$data['data_berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row_array();
		$this->load->view("user/berita/detail",$data);
	}

	//function insert
	function tambah_data(){
		$this->form_validation->set_rules('tgl', 'Tgl Upload', 'required');
		$this->form_validation->set_rules('judul', 'Topik Berita', 'required');
		$this->form_validation->set_rules('isi', 'Konten Berita', 'required');
		$this->form_validation->set_rules('user', 'Author', 'required');
		
   		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
			redirect('berita/input');
		}
		else {
			$this->m_berita->save_data();
			$this->session->set_flashdata('success','Data Berhasil Disimpan!');
			redirect('berita');
		}
	}

	function edit_data($id){
		$this->form_validation->set_rules('tgl', 'Tgl Upload', 'required');
		$this->form_validation->set_rules('judul', 'Topik Berita', 'required');
		$this->form_validation->set_rules('isi', 'Konten Berita', 'required');
		$this->form_validation->set_rules('user', 'Author', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
			redirect('berita/edit($id)');
		}
		else {
			$this->m_berita->update_data($id);
			$this->session->set_flashdata('success','Data Berhasil Diubah!');
			redirect('berita');
		}
	}

	function hapus_data($id){
		$this->m_berita->delete_data($id);
		$this->session->set_flashdata('success','Data Berhasil Dihapus!');
		redirect('berita');
	}		

}

?>