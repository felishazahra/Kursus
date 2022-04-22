<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

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
	public function index()
	{
		//mengambil data dari tabel user
		$data['program']=$this->m_data->get_data('program')->result();
		$dat['judul']='kursus';
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_program',$data);
		$this->load->view('layout/v_footer');
	}

	function program_tambah(){
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_program_tambah');
		$this->load->view('layout/v_footer');
	}

	function aksi_tambah(){
		$id = $this->input->post('');
		$program_kusus = $this->input->post('');
		$keterangan = $this->input->post('');


		// insert data ke database
		$this->m_data->insert_data($data,'program');

		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'program');
	}
	function program_hapus(){
		//mendapatkan parameter dari tombol klik
		$id = $this->uri->segment(3);
		$where = array(
		'id' => $id
	);

		// menghapus data admin dari database sesuai id
		$this->m_data->delete_data($where,'program');
		
		// mengalihkan halaman ke halaman data user
		redirect(base_url().'program');
	}



	function program_edit(){
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_program_edit');
		$this->load->view('layout/v_footer');
	}

	function program_simpan_edit(){
		$id = $this->input->post('id');
		$program = $this->input->post('program');
		$keterangan = $this->input->post('keterangan');
		$where = array(
			'id' => $id
			);
			// cek apakah form password di isi atau tidak
			$data = array();
			if($id==""){
			$data = array(
			'program' => $program,
			'keterangan' => $keterangan
			);
		// update data ke database
		$this->m_data->update_data($where,$data,'program');
	}else{
		$data = array(
		'id' => $id,
		'program' => $program,
		'keterangan' => $keterangan
		);
		
		// update data ke database
		$this->m_data->update_data($where,$data,'program');
	}
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'program');
	}
	function user_logout(){
		$this->session->sess_destroy();
		redirect(base_url(). 'landing');
	}
}