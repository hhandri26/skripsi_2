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
			$this->db->select('a.id, a.id_kelas_meeting, a.hari, a.ronde, a.kelas, b.nama_pertandingan');
			$this->db->from('tb_pertandingan a');
			$this->db->join('tb_kelas_meeting b', 'a.id_kelas_meeting = b.id','left');
			$this->db->order_by('b.nama_pertandingan');
			return $this->db->get();
		}


	}