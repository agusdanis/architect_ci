<?php

Class M_Master extends CI_Model {

	
	// Read data using username and password
	
	function get_subkon($id='') {
		if ($id !== '') {
			$condition = "msub_id = ".$id;
		} else {
			$condition = "msub_isdel = 0";
		}
			$this->db->select("*");
			$this->db->from("apj_master.ms_subkon");
			//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");
			$this->db->where($condition);
			$this->db->order_by('msub_nama_subkon');
			//$this->db->limit(1);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
	}

	function del_subkon($table='',$id='') {
		if ($id !== '') {
			$condition = "msub_id = ".$id;
			$data = array('msub_isdel' => 1);
			$this->db->where($condition);
			$query = $this->db->update($table, $data);
		}
	}
	

}

?>