<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
		{
			public function __construct()
			{
                parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('crud_models');
                $this->load->model('security_models');
                $this->load->model('master_models');
				$this->security_models->get_security();

            }

            public function guru()
            {

                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_table_guru()->result();
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Guru';
				$data['content'] 				= 'master/guru';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'guru';
				$this->load->view('admin/home', $data);

            }

            public function add_guru()
            {
                $data = array(
                    "kd_guru"	=> $this->input->post('kd_guru'),
                    "nama_guru" => $this->input->post('nama_guru'),
                    "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                    "mapel" => $this->input->post('mapel')
                );

                if($this->crud_models->add_data($data,'tb_guru')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/guru');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/guru');
                }

            }

            public function edit_guru()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_guru"	=> $this->input->post('kd_guru'),
                                        "nama_guru" => $this->input->post('nama_guru'),
                                        "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                                        "mapel" => $this->input->post('mapel')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_guru')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/guru');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/guru');
				}

            }

            public function delete_guru()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_guru')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/guru');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/guru');
				}

            }

            public function mapel()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->crud_models->get_all_data('tb_mapel')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Mata Pelajaran';
				$data['content'] 				= 'master/mapel';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'mapel';
				$this->load->view('admin/home', $data);

            }
            public function add_mapel()
            {
                $data = array(
                    "kd_mapel"	=> $this->input->post('kd_mapel'),
                    "nama_mapel" => $this->input->post('nama_mapel')
                );

                if($this->crud_models->add_data($data,'tb_mapel')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/mapel');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/mapel');
                }

            }

            public function edit_mapel()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_mapel"	=> $this->input->post('kd_mapel'),
                                        "nama_mapel" => $this->input->post('nama_mapel')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_mapel')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/mapel');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/mapel');
				}

            }

            public function delete_mapel()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_mapel')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/mapel');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/mapel');
				}

            }

            public function ruangan()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Ruangan';
				$data['content'] 				= 'master/ruangan';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'ruangan';
				$this->load->view('admin/home', $data);

            }

            public function add_ruangan()
            {
                $data = array(
                    "kd_ruangan"	=> $this->input->post('kd_ruangan'),
                    "nama_ruangan" => $this->input->post('nama_ruangan')
                );

                if($this->crud_models->add_data($data,'tb_ruangan')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/ruangan');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/ruangan');
                }

            }

            public function edit_ruangan()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_ruangan"	=> $this->input->post('kd_ruangan'),
                                        "nama_ruangan" => $this->input->post('nama_ruangan')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_ruangan')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/ruangan');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/ruangan');
				}

            }

            public function delete_ruangan()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_ruangan')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/ruangan');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/ruangan');
				}

            }

            public function murid()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_data_murid()->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Ruangan';
				$data['content'] 				= 'master/murid';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'murid';
				$this->load->view('admin/home', $data);

            }

            public function add_murid()
            {
                $data = array(
                    "nisn"	=> $this->input->post('nisn'),
                    "nama_murid" => $this->input->post('nama_murid'),
                    "jenis_kelamin"	=> $this->input->post('jenis_kelamin'),
                    "kelas" => $this->input->post('kelas')
                );

                if($this->crud_models->add_data($data,'tb_murid')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/murid');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/murid');
                }

            }

            public function edit_murid()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "nisn"	=> $this->input->post('nisn'),
                                        "nama_murid" => $this->input->post('nama_murid')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_murid')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/murid');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/murid');
				}

            }

            public function delete_murid()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_murid')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/murid');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/murid');
				}

            }

            public function jadwal()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->crud_models->get_all_data('tb_jadwal')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'master/jadwal';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'jadwal';
				$this->load->view('admin/jadwal', $data);

            }
        }