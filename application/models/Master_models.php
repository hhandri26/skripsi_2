<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Master_models extends CI_Model
{

    public function get_table_guru(){
        $this->db->select('a.id, a.kd_guru, a.nama_guru, a.jenis_kelamin, a.mapel, b.nama_mapel');
        $this->db->from('tb_guru a');
        $this->db->join('tb_mapel b','b.id = a.mapel','left');
        return $this->db->get();
    }

    public function get_data_murid(){
        $this->db->select('a.id, a.nisn, a.nama_murid, a.jenis_kelamin, a.kelas, b.nama_ruangan');
        $this->db->from('tb_murid a');
        $this->db->join('tb_ruangan b','b.id = a.kelas','left');
        return $this->db->get();

    }
    
}