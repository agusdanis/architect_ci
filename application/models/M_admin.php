<?php

Class M_Admin extends CI_Model {

	
	// Read data using username and password
	function reset_password($id='') {
		if ($id !== '') {
			$condition = "usr_id = ".$id ;
		} else {
			$condition = "usr_password is null" ;
		}
		$table = 'apj_master.web_users';
		$data = array('usr_password' => password_hash('arista', PASSWORD_BCRYPT));
		$this->db->where($condition);
		$query = $this->db->update($table, $data); 
		print_r($query);
	}

}

?>