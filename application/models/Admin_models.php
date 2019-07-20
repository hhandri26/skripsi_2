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


	}