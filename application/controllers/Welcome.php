<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model("m_berita");
	}

	public function index()
	{
		$data["berita"] = $this->m_berita->getDash();
		$this->load->view('dashboard',$data);
	}

	public function berita()
	{
		$data["berita"] = $this->m_berita->getData();
		$data["lim"] = $this->m_berita->getDash();
		$this->load->view('depan/tampil_berita',$data);
	}

	public function data()
	{
		$this->load->view('depan/data_sebar');
	}
	public function deteksi()
	{
		$this->load->view('depan/deteksi');
	}
	public function histori()
	{
		$this->load->view('depan/histori');
	}

	public function login()
	{
		$this->load->view('login');
	}


}
