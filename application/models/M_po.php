<?php

Class M_Po extends CI_Model {

	
	// Read data using username and password
	function input_data($table, $data) {
		$this->db->insert($table, $data);
	}

	function get_list_po($mpro_id='') {

		if ($mpro_id == '') {
			$condition = "tpoh_isdel = 0" ;
		} else {
			$condition = "tpoh_isdel = 0 and tpoh_mpro_id = ".$mpro_id;
		}

		

		
			$this->db->select("tpoh_id, TPOH_TANGGAL, TPOH_TANGGAL_MOS , msup_namasupplier, msup_kontakperson, msup_telp, msup_fax, right(tpoh_kodepo,5) as kodepo, sum(tpod_qty_po * tpod_unitprice_konversi) as total_po, tpoh_catatan");
			//$this->db->select("TPOD_ID");
			$this->db->from("apj_inventory.tr_po_detail");
			$this->db->join("apj_inventory.tr_po_head", "tpod_tpoh_id = tpoh_id", "left");
			//$this->db->from("apj_inventory.tr_po_head");
			//$this->db->join("apj_inventory.tr_po_detail", "tpod_tpoh_id = tpoh_id", "left");

			$this->db->join("apj_master.ms_supplier", "msup_id = tpoh_msup_id", "left");
			
			$this->db->where($condition);
			$this->db->group_by('tpoh_id');
			//$this->db->order_by('tpoh_kodepo');
			//$this->db->limit(2);
		

		
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
	}

	function get_po_detail($tpoh_id='') {
		if ($tpoh_id != '') {
				$condition = "tpod_tpoh_id = ".$tpoh_id." and tpod_isdel = 0" ;
			
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_po_detail");
			$this->db->join("apj_inventory.tr_po_head", "tpod_tpoh_id = tpoh_id", "left");
			$this->db->where($condition);
			//$this->db->order_by('tbudqsd_seq');
			//$this->db->limit(10);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}
}

?>