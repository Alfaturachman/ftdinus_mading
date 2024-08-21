<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_home extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function search_data($keyword) {
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

    public function get_jadwal_by_day($kd_ruang, $dayOfWeek) {
        $this->db->select('jadwal_rg.*, ruang.nama as ruang_nama');
        $this->db->from('jadwal_rg');
        $this->db->join('ruang', 'jadwal_rg.kd_ruang = ruang.kd_ruang', 'left');
        $this->db->where('jadwal_rg.kd_ruang', $kd_ruang);
        $this->db->where('DAYOFWEEK(jadwal_rg.start_time)', $dayOfWeek + 1); // MySQL DAYOFWEEK returns 1 for Sunday, ..., 7 for Saturday
    
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_jadwal($dayOfWeek)
    {
        $dayOfWeek = (int)$dayOfWeek;

        // Mengambil nama dan kd_ruang dari tabel ruang dan data jadwal_rg
        $this->db->select('ruang.nama as ruang_nama, ruang.kd_ruang as ruang_kd, 
                        TIME(jadwal_rg.start_time) as start_time, TIME(jadwal_rg.end_time) as end_time, 
                        jadwal_rg.kegiatan');
        $this->db->from('ruang');
        $this->db->join('jadwal_rg', 'jadwal_rg.kd_ruang = ruang.kd_ruang AND DAYOFWEEK(jadwal_rg.start_time) = ' . ($dayOfWeek + 1), 'left');
        
        // Urutkan hasil berdasarkan start_time
        $this->db->order_by('jadwal_rg.start_time', 'ASC');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_jadwal_by_kd_ruang($kd_ruang, $dayOfWeek)
    {
        $dayOfWeek = (int)$dayOfWeek;

        $this->db->select('TIME(start_time) as start_time, TIME(end_time) as end_time, kegiatan');
        $this->db->from('jadwal_rg');
        $this->db->where('kd_ruang', $kd_ruang);
        $this->db->where('DAYOFWEEK(start_time)', $dayOfWeek + 1);
        $this->db->order_by('start_time', 'ASC');

        $query = $this->db->get();
        return $query->result();
    }


    public function get_all_ruang()
    {
        // Select ruang and jadwal_rg data
        $this->db->select('*');
        $this->db->from('ruang');
        
        $query = $this->db->get();
        return $query->result();
    }
}