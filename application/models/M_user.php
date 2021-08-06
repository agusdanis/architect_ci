<?php

Class M_User extends CI_Model {

	
	// Read data using username and password
	function input_data($table, $data) {
		$this->db->insert($table, $data);
	}

	function get_user($id='') {
		if ($id !== '') {
			$condition = "usr_id = ".$id;
		} else {
			$condition = "1=1";
		}
			$this->db->select("*");
			$this->db->from("apj_master.web_users");
			//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");
			$this->db->where($condition);
			$this->db->order_by('usr_namalengkap');
			//$this->db->limit(1);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
	}

	function get_rolecode() {
		
		//$condition = "usr_id = ".$id;
		$this->db->select("*");
		$this->db->from("apj_master.web_role");
		$this->db->order_by('role_rolecode');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function reset_pwd($id='') {
		if ($id != '') {
			$condition = "usr_id = ".$id ;
			$table = 'apj_master.web_users';
			$data = array('usr_password' => password_hash('arista', PASSWORD_BCRYPT));
			$this->db->where($condition);
			$query = $this->db->update($table, $data); 
			print_r($query);
		}
	}

	function change_pwd($id='', $passwd='') {
		if ($id != '') {
			$condition = array('usr_id' => $id) ;
			$table = 'apj_master.web_users';
			$data = array('usr_password' => password_hash($passwd, PASSWORD_BCRYPT));
			$this->db->where($condition);
			$query = $this->db->update($table, $data); 
			print_r($query);
		}
	}

	function get_user_proyek_detail($id='') {
		
		if ($id == '') {
			$condition = "mpro_isdel = 0 and mpro_isactive = 1 and mpro_webview = 1";
		} else {
			$condition = "usrpro_usr_id = ".$id;
		}
		$this->db->select("*");
		$this->db->from("users_proyek");
		$this->db->join("ms_proyek", "usrpro_mpro_id = mpro_id");
		//$this->db->join("ms_proyek_skope", "mpro_id = psk_mpro_id", "left");
		
		$this->db->where($condition);
		
		$this->db->order_by('usrpro_createddate', 'DESC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		}
	}
}

?>