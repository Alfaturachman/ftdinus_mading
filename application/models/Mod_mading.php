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
        $this->db->where('status', 'Show');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_mading_umum()
    {
        // Select mading data for 'Umum' category with expiration check
        $this->db->select('*');
        $this->db->from('mading');
        $this->db->where('kategori', 'Umum'); 
        $this->db->where('status', 'Show');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function update_expired_status()
    {
        date_default_timezone_set('Asia/Jakarta');
        // Ambil tanggal dan waktu saat ini
        $current_datetime = date('Y-m-d H:i:s');

        // Periksa apakah ada konten yang kedaluwarsa
        $query = $this->db->where('expire <', $current_datetime)
                    ->where('status', 'Show')
                    ->get('mading');

        if ($query->num_rows() > 0) {
            log_message('info', 'Ditemukan konten yang kedaluwarsa');

            // Update status konten yang kedaluwarsa
            $this->db->set('status', 'Hide')
                    ->where('expire <', $current_datetime)
                    ->where('status', 'Show')
                    ->update('mading');
        } else {
            log_message('info', 'Tidak ada konten yang kedaluwarsa');
        }
    }

}
