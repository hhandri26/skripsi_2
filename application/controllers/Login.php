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
        $this->admin_models->getlogin($username, $password);
       			
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('info', 'logout sukses');
        redirect(base_url('login'));
    }

}