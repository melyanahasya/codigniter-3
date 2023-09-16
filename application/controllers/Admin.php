<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	// untuk meload model & helper kalian
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
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
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('kelas'),
		];
		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('admin/siswa'));
	}

	public function hapus_siswa($id)
	{
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}

	// public function update_siswa($id)
	// {
	// 	$data['result'] = $this->m_model->getData();
	// 	$this->load->view('admin/update_siswa', $data);
	// }

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

}
?>