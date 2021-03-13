<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('matkul_model', 'matkul');
        $this->load->library('form_validation');
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('code', 'Code Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('name', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('credit', 'credit', 'required');
    }

    public function index()
    {
        $data['all_matkul'] = $this->matkul->findAll();

        $this->template->load('base_template', 'home/matkul/index', $data);
    }

    public function addMatkul()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $this->template->load('base_template', 'home/matkul/add_matkul');
        } else {
            if (isset($_POST['submit'])) {
                // Berarti user sudah mengisi data, tinggal simpan
                $this->matkul->addNew();

                // Redirect ke halaman awal
                redirect('matkul');
            }

            $this->template->load('base_template', 'home/matkul/add_matkul');
        }
    }
}
