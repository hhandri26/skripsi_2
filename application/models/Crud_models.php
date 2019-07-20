<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Crud_models extends CI_Model
{

    public function get_all_data($tbl){
        $this->db->select('*');
        $this->db->from($tbl);
        return $this->db->get();
    }
    
    public function add_data($data,$tbl){
        return $this->db->insert($tbl,$data);
    }

    public function edit_data($data,$id,$tbl){
        $this->db->where('id',$id);
        return $this->db->update($tbl,$data);

    }

    public function delete_data($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);

    }
    
}