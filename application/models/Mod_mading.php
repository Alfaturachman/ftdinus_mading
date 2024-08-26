<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_mading extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_mading_mahasiswa()
    {
        // Select mading data for 'Mahasiswa' category with expiration check
        $this->db->select('*');
        $this->db->from('mading');
        $this->db->where('kategori', 'Mahasiswa');
        $this->db->where('expire IS NULL OR expire >', date('Y-m-d H:i:s')); // Check if expire is null or in the future
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_mading_umum()
    {
        // Select mading data for 'Umum' category with expiration check
        $this->db->select('*');
        $this->db->from('mading');
        $this->db->where('kategori', 'Umum');
        $this->db->where('expire IS NULL OR expire >', date('Y-m-d H:i:s')); // Check if expire is null or in the future
        
        $query = $this->db->get();
        return $query->result();
    }
}
