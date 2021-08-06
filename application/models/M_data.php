<?php

Class M_Data extends CI_Model {

	
	// Read data using username and password
	function input_data($table, $data) {
		$this->db->insert($table, $data);
	}

	function tampil_data($table) {
		return $this->db->get($table);
	}

	function get_count($table) {
		return $this->db->count_all($table);
	}

	function update_data($where, $table, $data) {
		
		$this->db->where($where);
		$status=$this->db->update($table, $data);
		if($status){
			$this->session->set_flashdata('success', 'Update transaksi berhasil.');
		} else {
			$this->session->set_flashdata('error', 'Update error.');
		}
	}

	function last_id() {
		return $this->db->insert_id();
	}
	
	function hapus_data($where, $table, $data) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where, $table) {
		$this->db->get_where($table, $where);
	}

	function replace_data($field, $table, $data) {
		
		// $sql = $this->db->set($data)->insert($table);
		// print_r($sql);
		$this->db->set($field, $data)->insert($table);
		// print_r($field); echo '<pre> ';
	}

	function get_oldMasterDB() {


		$host = '192.168.0.241:/Database/masterdb.gdb';
		$username = 'SYSDBA';
		$password = 'masterkey';

		$dbh = ibase_connect($host, $username, $password);
		$stmt = 'SELECT * FROM bonupah';
		$sth = ibase_query($dbh, $stmt);
		while ($row = ibase_fetch_object($sth)) {
		    echo $row->email, "\n";
		}
		$result = ibase_free_result($sth);
		ibase_close($dbh);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
		

	}

}

?>