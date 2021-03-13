<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{

    public function findAll()
    {
        $query = "SELECT *
                    FROM `student`
        ";
        return $this->db->query($query)->result_array();
    }

    public function addNew()
    {
        $data = [
            'name'              => $this->input->post('name', true),
            'address'           => $this->input->post('address', true),
            'phone_number'      => $this->input->post('phone_number', true),
        ];

        $this->db->insert('student', $data);
    }
}
