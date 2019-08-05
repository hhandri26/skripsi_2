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
				$this->load->model('crud_models');

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

			public function class_meet()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
				$data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Class Meeting';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'class_meet/table';
				$data['nav_top']				= 'class_meet';
				$data['nav_sub']				= 'class_meet';
				$data['prosess'] 				= 'no';
				$this->load->view('admin/home', $data);

			}
			
			public function prosess_jadwal()
			{
				$kelas = $this->input->post('kelas');
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();	
				$push 	= array();		
				// prosess round robin
				
				
				$data['schedule'] 				= $this->scheduler($kelas);
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Class Meeting';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'class_meet/table';
				$data['nav_top']				= 'class_meet';
				$data['nav_sub']				= 'class_meet';
				$data['prosess'] 				= 'ok';
				$this->load->view('admin/home', $data);

			}

			public function scheduler($ruangan){
				if (count($ruangan)%2 != 0){
					array_push($ruangan,"bye");
				}
				$away = array_splice($ruangan,(count($ruangan)/2));
				$home = $ruangan;
				for ($i=0; $i < count($home)+count($away)-1; $i++){
					for ($j=0; $j<count($home); $j++){
						$round[$i][$j]["Home"]=$home[$j];
						$round[$i][$j]["Away"]=$away[$j];
					}
					if(count($home)+count($away)-1 > 2){
						array_unshift($away,array_shift(array_splice($home,1,1)));
						array_push($home,array_pop($away));
					}
				}
				return $round;
			}
			
		}