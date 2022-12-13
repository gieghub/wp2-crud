<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_Model{
    public function simpan($tabel, $data){
        return $this->db->insert($tabel, $data);
    }
}