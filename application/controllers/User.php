<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['user']=$this->m_data->get_data('tbl_user')->result();
		$dat['judul']='kursus';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_user',$data);
		$this->load->view('admin/v_footer');
	}

	function user_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_user_tambah');
		$this->load->view('admin/v_footer');
	}

	function aksi_tambah(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		
		$data = array(
		'username' => $email,
		'password' => md5($password),
		'level' => $level
	);
		// insert data ke database
		$this->m_data->insert_data($data,'tbl_user');

		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');
	}

	function user_hapus(){
		//mendapatkan parameter dari tombol klik
		$id_user = $this->uri->segment(3);
		$where = array(
		'id_user' => $id_user
	);

		// menghapus data admin dari database sesuai id
		$this->m_data->delete_data($where,'tbl_user');
		
		// mengalihkan halaman ke halaman data user
		redirect(base_url().'user');
	}

	function user_edit(){
		$id = $this->uri->segment(3);
		$where = array('id_user' => $id);
		// mengambil data dari database sesuai id
		$data['user'] = $this->m_data->edit_data($where,'tbl_user')->row();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_user_edit',$data);
		$this->load->view('admin/v_footer');
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
