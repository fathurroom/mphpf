<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model', 'dosen');
        $this->load->library('form_validation');
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('name', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('address', 'Alamat Dosen', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('phone_number', 'No Telepon', 'required');
    }

    public function index()
    {
        $data['all_dosen'] = $this->dosen->findAll();

        $this->template->load('base_template', 'home/dosen/index', $data);
    }

    public function addDosen()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $this->template->load('base_template', 'home/dosen/add_dosen');
        } else {
            if (isset($_POST['submit'])) {
                // Berarti user sudah mengisi data, tinggal simpan
                $this->dosen->addNew();

                // Redirect ke halaman awal
                redirect('dosen');
            }

            $this->template->load('base_template', 'home/dosen/add_dosen');
        }
    }
}
