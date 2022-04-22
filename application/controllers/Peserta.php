<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

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
		$data['peserta']=$this->m_data->get_data('peserta')->result();
		$dat['judul']='kursus';
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_peserta',$data);
		$this->load->view('layout/v_footer');
	}

	function peserta_tambah(){
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_peserta_tambah');
		$this->load->view('layout/v_footer');
	}

	function aksi_tambah(){
		$peserta = $this->input->post('');
		$alamat = $this->input->post('');
		$jenis_kelamin = $this->input->post('');
		$tempat_lahir = $this->input->post('');
        $tanggal_lahir = $this->input->post('');



		// insert data ke database
		$this->m_data->insert_data($data,'peserta');

		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'peserta');
	}

	function user_hapus(){
		//mendapatkan parameter dari tombol klik
		$id_user = $this->uri->segment(3);
		$where = array(
		'id_user' => $id_user
	);

		// menghapus data admin dari database sesuai id
		$this->m_data->delete_data($where,'peserta');
		
		// mengalihkan halaman ke halaman data user
		redirect(base_url().'peserta');
	}

	function peserta_edit(){
		$id = $this->uri->segment(3);
		$where = array('peserta' => $id);
		// mengambil data dari database sesuai id
		$data['peserta'] = $this->m_data->edit_data($where,'peserta')->row();
		$this->load->view('layout/v_header');
		$this->load->view('layout/v_navbar');
		$this->load->view('layout/v_sidebar');
		$this->load->view('layout/v_peserta_edit',$data);
		$this->load->view('layout/v_footer');
	}

	function user_simpan_edit(){
		$id = $this->input->post('id');
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
		'id_user' => $id
		);
		// cek apakah form password di isi atau tidak
		$data = array();
		if($password==""){
		$data = array(
		'username' => $username,
		'level' => $level
		);
		// update data ke database
		$this->m_data->update_data($where,$data,'tbl_user');
	}else{
		$data = array(
		'username' => $username,
		'password' => md5($password),
		'level' => $level
		);
		
		// update data ke database
		$this->m_data->update_data($where,$data,'tbl_user');
	}
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');
	}
	function user_logout(){
		$this->session->sess_destroy();
		redirect(base_url(). 'landing');
	}
}
