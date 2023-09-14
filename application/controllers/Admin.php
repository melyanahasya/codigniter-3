<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // untuk meload model & helper kalian
	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');;
        // fungsi validasi dibawah untuk ngecek ketika masuk ke halaman admin , data sdh true atau blm
        // kalo blm true maka akan kembali ke page auth
        if ($this->session->userdata('logged_in')!=true) {
           redirect(base_url().'auth');
        }
	}

    // untuk menampilkan folder admin/index
	public function index()
	{	
		$this->load->view('admin/index');
	}

	public function siswa()
	{	
        $data['result'] = $this->m_model->getData();
		$this->load->view('admin/siswa', $data);
	}
	

	}
?>