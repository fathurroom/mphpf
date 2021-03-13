<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model', 'dosen');
    }

    public function index()
    {
        $data['all_dosen'] = $this->dosen->findAll();

        $this->template->load('base_template', 'home/dosen/index', $data);
    }

    public function addDosen()
    {
        if (isset($_POST['submit'])) {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->dosen->addNew();

            // Redirect ke halaman awal
            redirect('dosen');
        }

        $this->template->load('base_template', 'home/dosen/add_dosen');
    }
}
