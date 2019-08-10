<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Master_models extends CI_Model
{

    public function get_table_guru(){
        $this->db->select('a.id, a.alamat, a.tgl_lahir, a.kd_guru, a.nama_guru, a.jenis_kelamin, a.mapel, b.nama_mapel');
        $this->db->from('tb_guru a');
        $this->db->join('tb_mapel b','b.id = a.mapel','left');
        return $this->db->get();
    }

    public function get_data_murid(){
        $this->db->select('a.id, a.nisn, a.nama_murid, a.alamat, a.tgl_lahir, a.jenis_kelamin, a.kelas, b.nama_ruangan');
        $this->db->from('tb_murid a');
        $this->db->join('tb_ruangan b','b.id = a.kelas','left');
        return $this->db->get();

    }

    public function get_jadwal(){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        return $this->db->get();

    }

    public function get_data_jadwal($id)
    {
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id',$id);
        return $this->db->get();
    }

    public function get_jadwal_murid($id){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id_kelas',$id);
        return $this->db->get();

    }

    public function get_jadwal_guru($id){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id_guru',$id);
        return $this->db->get();

    }

    
}