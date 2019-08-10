<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_models');
    }

    public function index()
    {
        $data['script_top']    		= 'admin/script_top';
        $data['script_bottom']  	= 'admin/script_btm';
        $this->load->view('admin/login', $data);
    }

    public function getlogin()
    {
        $username 	= xss_clean($this->input->post('username'));
        $password 	= xss_clean($this->input->post('password'));

        $adm 		= $this->db->get_where('admin', array('username'=>$username))->row();
        $murid      = $this->db->get_where('tb_murid', array('nisn'=>$username))->row();
        $guru       = $this->db->get_where('tb_guru', array('kd_guru'=>$username))->row();

        $status	 	= $adm->level;
        $status2    = $murid->nisn;
        $status3    = $guru->kd_guru;
        if($this->db->get_where('admin', array('level'=>$status))->row()){
            $this->admin_models->getlogin($username, $password);
        }elseif($this->db->get_where('tb_murid', array('nisn'=>$status2))->row()){
            $this->admin_models->getlogin_murid($username, $password);
        }else{
            $this->admin_models->getlogin_guru($username, $password);

        }
       
       			
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('info', 'logout sukses');
        redirect(base_url('login'));
    }

}