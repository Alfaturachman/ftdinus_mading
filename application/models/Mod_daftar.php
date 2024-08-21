<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_daftar extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function search_data($keyword)
    {
        // Tentukan tabel yang ingin Anda cari
        $this->db->select('*');
        $this->db->from('ruang');

        // Tentukan kolom yang ingin Anda cari berdasarkan keyword
        $this->db->like('kd_ruang', $keyword);
        $this->db->or_like('nama', $keyword);

        // Eksekusi query
        $query = $this->db->get();
        return $query->result();
    }

    public function get_jadwal($kd_ruang)
    {
        $this->db->select('jadwal_rg.*, ruang.nama as ruang_nama');
        $this->db->from('jadwal_rg');
        $this->db->join('ruang', 'jadwal_rg.kd_ruang = ruang.kd_ruang', 'left');
        $this->db->where('jadwal_rg.kd_ruang', $kd_ruang);

        $query = $this->db->get();
        return $query->result();
    }
}
