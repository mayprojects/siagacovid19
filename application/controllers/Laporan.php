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
		$this->load->view("user/laporan/input");
	}

	public function edit($id){
		$data['data_laporan'] = $this->db->get_where('laporan', ['id_laporan' => $id])->row_array();
		$this->load->view("user/laporan/edit",$data);
	}

	public function detail($id){
		$data['data_laporan'] = $this->db->get_where('laporan', ['id_laporan' => $id])->row_array();
		$this->load->view("user/laporan/detail",$data);
	}

	//function insert
	function tambah_data(){
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('gejala', 'Gejala', 'required');
		$this->form_validation->set_rules('rujukan', 'Rujukan', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('user', 'Pelapor', 'required');


   		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
			redirect('laporan/input');
		}
		else {
			$this->m_laporan->save_data();
			$this->session->set_flashdata('success','Data Berhasil Disimpan!');
			redirect('laporan');
		}
	}


		function edit_data($id){
			$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('gejala', 'Gejala', 'required');
			$this->form_validation->set_rules('rujukan', 'Rujukan', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			$this->form_validation->set_rules('user', 'Pelapor', 'required');

			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed',validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('laporan/edit');
			}
			else {
				$this->m_laporan->update_data($id);
				$this->session->set_flashdata('success','Data Berhasil Diubah!');
				redirect('laporan');
			}
		}

		function hapus_data($id){
			$this->m_laporan->delete_data($id);
			$this->session->set_flashdata('success','Data Berhasil Dihapus!');
			redirect('laporan');
		}		

}

?>