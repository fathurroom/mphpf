<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('matkul_model', 'matkul');
    }

    public function index()
    {
        $data['all_matkul'] = $this->matkul->findAll();

        $this->template->load('base_template', 'home/matkul/index', $data);
    }

    public function addMatkul()
    {
        if (isset($_POST['submit'])) {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->matkul->addNew();

            // Redirect ke halaman awal
            redirect('matkul');
        }

        $this->template->load('base_template', 'home/matkul/add_matkul');
    }
}
