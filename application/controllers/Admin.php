<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	// untuk meload model & helper kalian
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		// untuk relasi
		$this->load->helper('my_helper');
		// untuk menambahkan foto nanti
		$this->load->library('upload');
		;
		// fungsi validasi dibawah untuk ngecek ketika masuk ke halaman admin , data sdh true atau blm
		// kalo blm true maka akan kembali ke page auth
		if ($this->session->userdata('logged_in') != true) {
			redirect(base_url() . 'auth');
		}
	}

	// untuk menampilkan folder admin/index
	public function index()
	{
		// get data siswa
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		// untuk menampilkan admin/index
		$this->load->view('admin/index', $data);
	}

	public function upload_img($value)
	{
		$kode = round(microtime(true) * 1000);
		$config['upload_path'] = './images/siswa';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '30000';
		$config['file_name'] = $kode;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($value)) {
			return array(false, '');
		} else {
			$fn = $this->upload->data();
			$nama = $fn['file_name'];
			return array(true, $nama);
		}
	}

	public function siswa()
	{
		$data['result'] = $this->m_model->getData();
		$this->load->view('admin/siswa', $data);
	}



	public function tambah_siswa()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}



	public function aksi_tambah_siswa()
	{
		$foto = $this->upload_img('foto');
		if ($foto[0] == false) {
			$data = [
				'foto' => 'user.png',
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('kelas'),
			];
			$this->m_model->tambah_data('siswa', $data);
			redirect(base_url('admin/siswa'));
		} else {
			$data = [
				'foto' => $foto[1],
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('kelas'),
			];
			$this->m_model->tambah_data('siswa', $data);
			redirect(base_url('admin/siswa'));
		}


	}

	public function hapus_siswa($id)
	{
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}


	// 2. untuk update siswa

	public function update_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/update_siswa', $data);
	}

	public function aksi_ubah_siswa()
	{
		$data = array(
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('kelas'),
		);

		$eksekusi = $this->m_model->ubah_data
		('siswa', $data, array('id_siswa' => $this->input->post('id_siswa')));
		if ($eksekusi) {
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/siswa'));
		} else {
			$this->session->set_flashdata('error', 'gagal..');
			redirect(base_url('admin/siswa/update_siswa/' . $this->input->post('id_siswa')));
		}
	}

	public function akun()
	{
		$data['user'] = $this->m_model->get_by_id('admin', 'id', $this->session->userdata('id'))->result();
		$this->load->view('admin/akun', $data);
	}

	public function aksi_ubah_akun()
	{
		$password_baru = $this->input->post('password_baru');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$email = $this->input->post('email');
		$username = $this->input->post('username');

		// yang di sblh kiri disamain dg database
		// buat data yang diubah
		$data = array(
			'email' => $email,
			'username' => $username
		);

		// jika ada password baru
		if (!empty($password_baru)) {
			// pastikan password baru dan konfirmasi password sama
			if ($password_baru === $konfirmasi_password) {
				// Hash password baru
				$data['password'] = md5($password_baru);
			} else {
				$this->session->set_flashdata('message', 'Password baru dan konfigurasi password harus sama');
				redirect(base_url('admin/akun'));
			}
		}

		// lakukan pembaruan data
		$this->session->set_userdata($data);
		$update_result = $this->m_model->ubah_data('admin', $data, array('id' => $this->session->userdata('id')));

		if ($update_result) {
			redirect(base_url('admin/akun'));
		} else {
			redirect(base_url('admin/akun'));
		}
	}

}
?>