<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeAddress extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model', 'student');
		$this->load->library('form_validation');
	}

	private function _validasi()
	{
		$this->form_validation->set_rules('name', 'Nama Dosen', 'required');
		$this->form_validation->set_rules('address', 'Alamat Dosen', 'required');
		$this->form_validation->set_rules('phone_number', 'No Telepon', 'required');
	}

	public function index()
	{
		$data['all_students'] = $this->student->findAll();

		$this->template->load('base_template', 'home/mahasiswa/index_template', $data);
	}

	public function addStudent()
	{
		$this->_validasi();
		if ($this->form_validation->run() == false) {
			$this->template->load('base_template', 'home/mahasiswa/add_student_template');
		} else {
			if (isset($_POST['submit'])) {
				// Berarti user sudah mengisi data, tinggal simpan
				$this->student->addNew();

				// Redirect ke halaman awal
				redirect('homeAddress');
			}

			$this->template->load('base_template', 'home/mahasiswa/add_student_template');
		}
	}
}
