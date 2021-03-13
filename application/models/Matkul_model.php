<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{

    public function findAll()
    {
        $query = "SELECT *
                    FROM `subject`
        ";
        return $this->db->query($query)->result_array();
    }

    public function addNew()
    {
        $data = [
            'code'              => $this->input->post('code', true),
            'name'              => $this->input->post('name', true),
            'credit'           => $this->input->post('credit', true),
        ];

        $this->db->insert('subject', $data);
    }
}
