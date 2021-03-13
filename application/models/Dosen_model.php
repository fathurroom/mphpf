<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{

    public function findAll()
    {
        $query = "SELECT *
                    FROM `dosen`
        ";
        return $this->db->query($query)->result_array();
    }

    public function addNew()
    {
        $data = [
            'nip'              => $this->input->post('nip', true),
            'name'              => $this->input->post('name', true),
            'address'           => $this->input->post('address', true),
            'prodi'              => $this->input->post('prodi', true),
            'phone_number'      => $this->input->post('phone_number', true),
        ];

        return $this->db->insert('dosen', $data);
    }
}
