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
        // Select ruang and jadwal_rg data
        $this->db->select('*');
        $this->db->from('mading');
        $this->db->where('kategori','Mahasiswa');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_mading_umum()
    {
        // Select ruang and jadwal_rg data
        $this->db->select('*');
        $this->db->from('mading');
        $this->db->where('kategori','Umum');
        
        $query = $this->db->get();
        return $query->result();
    }
}