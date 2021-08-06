<?php

Class M_Login extends CI_Model {

	// Insert registration data in database
	public function registration_insert($data) {

		// Query to check whether username already exist or not
		$condition = "usr_username =" . "'" . $data['usr_username'] . "'";
		$this->db->select('*');
		$this->db->from('web_users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		//print_r($query);
		if ($query->num_rows() == 0) {

			// Query to insert data in database
			$this->db->insert('web_users', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
		} else {
			return false;
		}
	}

	// Read data using username and password
	public function login($data) {

		$condition = "usr_username =" . "'" . $data . "' or 
				usr_nohp =" . "'" . $data . "' or  
				usr_pin =" . "'" . $data . "'" ;
		$this->db->select('*');
		$this->db->from('web_users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	// Read data from database to show data in admin page
	public function read_user_information($username) {

		$condition = "user_name =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function cek_login($table,$where){		
		
		return $this->db->get_where($table,$where);
	}

	// Read data from database to show data in admin page
	public function get_user_proyek($id) {

		$condition = "usrpro_usr_id =" . "'" . $id . "'";
		$this->db->select("cast(group_concat( usrpro_mpro_id SEPARATOR ', ') as char(500)) mpro_id");
		$this->db->from('users_proyek');
		$this->db->where($condition);
		//$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	
}

	

?>

