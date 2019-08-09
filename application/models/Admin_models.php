<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Admin_models extends CI_Model
	{
		public function getlogin($username, $password)
		{
			$password 	= md5($password);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('admin');
			if($querry->num_rows()>0)
				{
					foreach ($querry->result() as $row) 
					{
						$sess = array('username' => $row->username,
									  'password' => $row->password);
						$this->session->set_userdata($sess);
						$this->session->set_flashdata('info', 'login sukses');
						redirect('admin');
					}
				}else 
					{
						$this->session->set_flashdata('info', 'username dan password salah');
						redirect('login');
					} 

		}

		public function get_data_role()
		{
			$this->db->select('a.id, a.id_kelas_meeting, a.hari, a.ronde, a.kelas, b.nama_pertandingan,b.jenis_olahraga');
			$this->db->from('tb_pertandingan a');
			$this->db->join('tb_kelas_meeting b', 'a.id_kelas_meeting = b.id','left');
			$this->db->order_by('b.nama_pertandingan');
			return $this->db->get();
		}

		public function get_data_guru()
		{
			$this->db->select('a.id, a.kd_guru, a.nama_guru, a.jenis_kelamin, a.mapel, b.nama_mapel');
			$this->db->from('tb_guru a');
			$this->db->join('tb_mapel b', 'a.mapel = b.id','left');
			$this->db->order_by('a.nama_guru');
			return $this->db->get();
		}
		public function get_data_murid()
		{
			$this->db->select('a.id, a.nisn, a.nama_murid, a.kelas, a.jenis_kelamin, b.nama_ruangan');
			$this->db->from('tb_murid a');
			$this->db->join('tb_ruangan b', 'a.kelas = b.id','left');
			$this->db->order_by('b.nama_ruangan');
			return $this->db->get();
		}

		public function get_data_mapel()
		{
			$this->db->select('a.id, a.nisn, a.nama_murid, a.kelas, a.jenis_kelamin, b.nama_ruangan');
			$this->db->from('tb_murid a');
			$this->db->join('tb_ruangan b', 'a.kelas = b.id','left');
			$this->db->order_by('b.nama_ruangan');
			return $this->db->get();

		}

	


	}