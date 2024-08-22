<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_backend extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
    public function get_jadwal()
    {
        $this->db->select('*');
        $this->db->from('jadwal_rg');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ruang()
    {
        $this->db->select('*');
        $this->db->from('ruang');
        $query = $this->db->get();
        return $query->result();
    }

    
    public function get_jadwal_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal_rg');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ruang_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('ruang');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

   
    public function add_jadwal($data)
    {
        return $this->db->insert('jadwal_rg', $data);
    }

    public function add_ruang($data)
    {
        return $this->db->insert('ruang', $data);
    }

    
    public function update_jadwal($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('jadwal_rg', $data);
    }

    public function update_ruang($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('ruang', $data);
    }

    
    public function delete_jadwal($id)
    {
        return $this->db->delete('jadwal_rg', array('id' => $id));
    }

    public function delete_ruang($id)
    {
        return $this->db->delete('ruang', array('id' => $id));
    }
}
