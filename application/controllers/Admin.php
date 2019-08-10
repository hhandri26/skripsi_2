<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->library('pdf');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->load->model('master_models');
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
				$after_kelas 		= $this->input->post('kelas');
				$nama_pertandingan 	= $this->input->post('nama_pertandingan');
				$jenis_olahraga 	= $this->input->post('jenis_olahraga');
				if($nama_pertandingan=='' && $after_kelas==''){
					$this->session->set_flashdata('danger', 'Nama pertandingan dan kelas harus dimasukan!');				
                    redirect('admin/class_meet');
				}
				if($this->input->post('on_input')){
					$date 	= date("Y-m-d H:i:s");
					$kelas 	= $this->input->post('kelas');
					if($kelas==''){
						$this->session->set_flashdata('danger', 'Kelas harus dimasukan!');				
						redirect('admin/class_meet');
					}
					

					$data = array(
									"nama_pertandingan" =>$nama_pertandingan,
									"jenis_olahraga"	=>$jenis_olahraga,
									"date" 				=>$date,
								);
					$this->crud_models->add_data($data,'tb_kelas_meeting');
					// get last id
					$get 	= $this->db->get_where('tb_kelas_meeting', array('date'=>$date))->row();
					$id_h 	= $get->id;
					$press 	= array();
					// get rumus round robin
					$schedule	= $this->scheduler($after_kelas);
					foreach($schedule AS $round => $games){

						$sch['hari'] 	= $round+1;
						foreach($games AS $play){
							
							$sch =  $play["Home"]." - ".$play["Away"];
							$no 	=	1;
							$data_2 = array(
								"id_kelas_meeting" => $id_h,
								"hari" 			   =>$round+1,
								"ronde" 		 	=>$no++,
								"kelas" 			=> $sch

							);
							$this->crud_models->add_data($data_2,'tb_pertandingan');
							
						}
						
					
						
					}
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('admin/class_meet');
				}else{
					$kelas 				= $this->input->post('kelas');
					$data['admin']		= $this->db->get_where('admin', array('id' => 1))->row();
					$data['kelas']      =$this->crud_models->get_all_data('tb_ruangan')->result();
					$data['kelas_val'] 		= $kelas;
					$data['nama_pertandingan']= $nama_pertandingan;

					// prosess round robin					
					$data['schedule'] 	= $this->scheduler($kelas);
					// var_dump($this->scheduler($kelas));
					// die();
					$data['script_top'] 	= 'admin/script_top';
					$data['script_bottom']  = 'admin/script_btm';
					$data['admin_nav']		= 'admin/admin_nav';
					$data['judul'] 			= 'Class Meeting';
					$data['sub_judul'] 		= 'jadwal';
					$data['content'] 		= 'class_meet/table';
					$data['nav_top']		= 'class_meet';
					$data['nav_sub']		= 'class_meet';
					$data['prosess'] 		= 'ok';
					$this->load->view('admin/home', $data);

				}
				

			}

			public function table_role()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table']                  = $this->admin_models->get_data_role()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Class Meeting';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'class_meet/result';
				$data['nav_top']				= 'class_meet';
				$data['nav_sub']				= 'role';
				$data['prosess'] 				= 'no';
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

			public function cetak($type){
				if($type=='guru'){
					$data['guru']		=$this->admin_models->get_data_guru()->result();
					$html = $this->load->view('cetak/guru', $data, true);

				}elseif($type=='murid'){
					$data['murid']		=$this->admin_models->get_data_murid()->result();
					$html = $this->load->view('cetak/murid', $data, true);
					

				}elseif($type=='mapel'){
					$data['mapel']		=$this->crud_models->get_all_data('tb_mapel')->result();
					$html = $this->load->view('cetak/mapel', $data, true);

				}elseif($type=='ruangan'){
					$data['ruangan']		=$this->crud_models->get_all_data('tb_ruangan')->result();
					$html = $this->load->view('cetak/ruangan', $data, true);

				}elseif($type=='classmeet'){
					$data['classmeet']		= $this->admin_models->get_data_role()->result();
					$html = $this->load->view('cetak/classmeet', $data, true);

				}else{
					$data['jadwal']		=$this->master_models->get_jadwal()->result();
					$html = $this->load->view('cetak/jadwal', $data, true);
				} 				
				$this->pdf->generate($html,'contoh');
			}

			public function cetak_mapel_murid($id){
				$data['jadwal']		=$this->master_models->get_jadwal_murid($id)->result();
				$html = $this->load->view('cetak/jadwal', $data, true);
				$this->pdf->generate($html,'contoh');

			}
			public function cetak_mapel_guru($id){
				$data['jadwal']		=$this->master_models->get_jadwal_guru($id)->result();
				$html = $this->load->view('cetak/jadwal', $data, true);
				$this->pdf->generate($html,'contoh');

			}
			
		}