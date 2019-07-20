<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->security_models->get_security();

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{
				$this->security_models->get_security();
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Home';
				$data['sub_judul'] 				= 'Dashboard';
				$data['content'] 				= 'admin/dashboard';
				$data['nav_top']				= 'dashboard';
				$data['nav_sub']				= 'home';
				$this->load->view('admin/home', $data);
			}
			
		}