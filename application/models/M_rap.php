<?php

Class M_Rap extends CI_Model {

	
	// Read data using username and password
	function input_data($table, $data) {
		$this->db->insert($table, $data);
	}

	function get_rap($mpro_id='', $id='') {
		if ($id == '') {
			$condition = "tbudqsh0_mpro_id = ".$mpro_id." and tbudqsh0_islock_0 = 1";
		} else {
			//$condition = "tbudqsh0_id = ".$id." and tbudqsh0_mpro_id = ".$mpro_id;
			$condition = "tbudqsh0_mpro_id = ".$mpro_id." and tbudqsh0_islock_0 = 1";
		}
			$this->db->select("tbudqsh0_mpro_id, ifnull(tbudqsh0_schinstall,'') tbudqsh0_schinstall, mpro_namaproyek, tbudqsh0_id, A.tbudqsh0_norap, concat(right(A.tbudqsh0_norap,5),'-R',tbudqsh0_rev_no)norap, tbudqsh0_rev_no, 
				ifnull(tbudqsh0_gedung,'') tbudqsh0_gedung, ifnull(tbudqsh0_lantai,'') tbudqsh0_lantai, ifnull(tbudqsh0_kodeunit,'') tbudqsh0_kodeunit, ifnull(tbudqsh0_nogambar,'') tbudqsh0_nogambar, tbudqsh0_pekerjaan, tbudqsh0_sub_pekerjaan, 
				tbudqsh0_spvid, ifnull(usr_namalengkap,'') tbudqsh0_namasupervisor, tbudqsh0_subkonid, ifnull(msub_nama_subkon,'') tbudqsh0_namasubkon, 
				ifnull(sum(tbudqsd_qtyrap_0*G.tbudqsm_unitpriceupah),0) total_upah_r0, 
				ifnull(sum(tbudqsd_qtyrap_valid*G.tbudqsm_unitpriceupah),0) total_upah_valid, 
				ifnull(sum(tbudqsd_qtybpb*G.tbudqsm_unitpriceupah),0) total_upah_bpb, 
				ifnull(round(sum(tbudqsd_qtybpb*G.tbudqsm_unitpriceupah)/sum(tbudqsd_qtyrap_valid*G.tbudqsm_unitpriceupah),2),0) prosenbpb, 
				ifnull(sum(`tbudqsm1_qtypasang` * `tbudqsm_unitpriceupah`),0) AS 'material_value',  
				ifnull(sum((`tbudqsm1_qtyprog1` * `tbudqsm_unitpriceupah`) * 0.1),0) AS 'prog1_value', 
				ifnull(sum((`tbudqsm1_qtyprog2` * `tbudqsm_unitpriceupah`) * (0.45 - 0.1)),0) AS 'prog2_value', 
				ifnull(sum((`tbudqsm1_qtyprog3` * `tbudqsm_unitpriceupah`) * (0.75 - 0.45)),0) AS 'prog3_value', ifnull(sum((`tbudqsm1_qtyprog4` * `tbudqsm_unitpriceupah`) * (0.9 - 0.75)),0) AS 'prog4_value', ifnull(sum((`tbudqsm1_qtyprog5` * `tbudqsm_unitpriceupah`) * (1 - 0.9)),0) AS 'prog5_value', 
				ifnull(sum((((((`tbudqsm1_qtyprog1` * `tbudqsm_unitpriceupah`) * 0.1) + ((`tbudqsm1_qtyprog2` * `tbudqsm_unitpriceupah`) * (0.45 - 0.1))) + ((`tbudqsm1_qtyprog3` * `tbudqsm_unitpriceupah`) * (0.75 - 0.45))) + ((`tbudqsm1_qtyprog4` * `tbudqsm_unitpriceupah`) * (0.9 - 0.75))) + ((`tbudqsm1_qtyprog5` * `tbudqsm_unitpriceupah`) * (1 - 0.9))),0) AS 'total_prog', 
				ifnull(sum((((((`tbudqsm1_qtyprog1`) * 0.1) + ((`tbudqsm1_qtyprog2`) * (0.45 - 0.1))) + ((`tbudqsm1_qtyprog3`) * (0.75 - 0.45))) + ((`tbudqsm1_qtyprog4`) * (0.9 - 0.75))) + ((`tbudqsm1_qtyprog5`) * (1 - 0.9))) / sum(tbudqsd_qtyrap_valid),0) AS total_prog_qty, 
				ifnull(round(sum(tbudqsd_qtybpb)/sum(tbudqsd_qtyrap_valid)*100,2),0) as prosenqtybpb,
				ifnull(round(sum(tbudqsm1_qtypasang)/sum(tbudqsd_qtyrap_valid)*100,2),0) as prosenqtypasang");
			$this->db->from("apj_inventory.tr_budget_qs_head_0 A");
			$this->db->join("apj_master.ms_proyek B", "tbudqsh0_mpro_id = mpro_id", "left");
			$this->db->join("apj_master.web_users C", "tbudqsh0_spvid = usr_id", "left");
			$this->db->join("apj_master.ms_subkon D", "tbudqsh0_subkonid = msub_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_head E", "tbudqsh_tbudqsh0_id = tbudqsh0_id and tbudqsh0_rev_no = tbudqsh_rev_no", "left");
			$this->db->join(" apj_inventory.tr_budget_qs_detail F", "tbudqsd_tbudqsh_id = tbudqsh_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master G", "(tbudqsm_mpro_id = tbudqsh0_mpro_id and tbudqsm_diskripsi_material = tbudqsd_diskripsi_material and tbudqsm_satuan = tbudqsd_satuan)", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master_1", "tbudqsm1_mpro_id = tbudqsh0_mpro_id and tbudqsm1_tbudqsh0_id = tbudqsh0_id and tbudqsm1_diskripsi_material = tbudqsm_diskripsi_material and tbudqsm1_satuan = tbudqsm_satuan", "left");
			$this->db->group_by("tbudqsh0_id");
			
			//$this->db->join("apj_master.ms_subkon D", "tbudqsh0_subkonid = msub_id", "left");
			
			$this->db->where($condition);
			$this->db->order_by('tbudqsh0_norap');
			//$this->db->limit(1);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
	}

	function get_rap_detail($id='', $rev='') {
		if ($id != '') {
			if ($rev != '') {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = ".$rev.
						" and (tbudqsd_qtyrap_0 <> 0 or tbudqsd_qtybpb <> 0 or tbudqsd_rap_valid <> 0) ";
				//$condition = "tbudqsh_tbudqsh0_id = ".$id;
			} else {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = 0 
					and (tbudqsd_qtyrap_0 <> 0 or  tbudqsd_qtybpb <> 0 or  tbudqsd_rap_valid <> 0) ";
		 	}
			$this->db->select("*, (tbudqsd_qtyrap_valid * tbudqsm_unitpriceupah) as totalrupiah, 
				ifnull(round(( (tbudqsm1_qtyprog1*tbudqsm1_unitpriceupah*0.1)+(tbudqsm1_qtyprog2*tbudqsm1_unitpriceupah*(0.45-0.1))+(tbudqsm1_qtyprog3*tbudqsm1_unitpriceupah*(0.75-0.45))+(tbudqsm1_qtyprog4*tbudqsm1_unitpriceupah*(0.9-0.75))+(tbudqsm1_qtyprog5*tbudqsm1_unitpriceupah*(1-0.9)) ),0),0) as progress,
				ifnull(round(( (tbudqsm1_qtyprog1*0.1)+(tbudqsm1_qtyprog2*(0.45-0.1))+(tbudqsm1_qtyprog3*(0.75-0.45))+(tbudqsm1_qtyprog4*(0.9-0.75))+(tbudqsm1_qtyprog5*(1-0.9)) ),2),0) as progressqtypasang,
				ifnull(round(( (tbudqsm1_qtyprog1*0.1)+(tbudqsm1_qtyprog2*(0.45-0.1))+(tbudqsm1_qtyprog3*(0.75-0.45))+(tbudqsm1_qtyprog4*(0.9-0.75))+(tbudqsm1_qtyprog5*(1-0.9)) )/tbudqsd_qtyrap_valid *100 ,2),0) as prosenqtypasang
				");
			$this->db->from("apj_inventory.tr_budget_qs_detail");
			$this->db->join("apj_inventory.tr_budget_qs_head", "tbudqsd_tbudqsh_id = tbudqsh_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_head_0", "tbudqsh_tbudqsh0_id = tbudqsh0_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master", "tbudqsm_mpro_id = tbudqsh0_mpro_id and tbudqsm_diskripsi_material = tbudqsd_diskripsi_material and tbudqsm_satuan = tbudqsd_satuan", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master_1", "tbudqsm1_tbudqsh0_id = tbudqsd_tbudqsh0_id and tbudqsm1_diskripsi_material = tbudqsd_diskripsi_material and tbudqsm1_satuan = tbudqsd_satuan", "left");
			
			$this->db->where($condition);
			$this->db->order_by('tbudqsd_seq');
			//$this->db->limit(10);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	function get_terpasang_detail($id='', $rev='', $tgl) {
		if ($id != '') {
			if ($rev != '') {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = ".$rev.
						" and (tbudqsd_qtyrap_0 <> 0 or tbudqsd_qtybpb <> 0 or tbudqsd_rap_valid <> 0) ";
						// and date(ttpsh_tanggal)=date('".$tgl."') ";
				//$condition = "tbudqsh_tbudqsh0_id = ".$id;
			} else {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = 0 
					and (tbudqsd_qtyrap_0 <> 0 or  tbudqsd_qtybpb <> 0 or  tbudqsd_rap_valid <> 0) ";
					//and date(ttpsh_tanggal)=date('".$tgl."')";
		 	}
			$this->db->select("ttpsd_id, tbudqsm_id, tbudqsm1_id, TBUDQSD_DISKRIPSI_MATERIAL,TBUDQSD_ID, TBUDQSD_TBUDQSH_ID, TBUDQSD_SATUAN, TBUDQSD_QTYRAP_VALID, TBUDQSD_QTYBPB, ttpsh_tanggal, ifnull(tbudqsm1_qtyprog1,0) tbudqsm1_qtyprog1, ifnull(tbudqsm1_qtyprog2,0) tbudqsm1_qtyprog2, 
				ifnull(tbudqsm1_qtyprog3,0) tbudqsm1_qtyprog3, ifnull(tbudqsm1_qtyprog4,0) tbudqsm1_qtyprog4, ifnull(tbudqsm1_qtyprog5,0) tbudqsm1_qtyprog5, ifnull(ttpsd_qtyprog1,0) ttpsd_qtyprog1, ifnull(ttpsd_qtyprog2,0) ttpsd_qtyprog2, ifnull(ttpsd_qtyprog3,0) ttpsd_qtyprog3, ifnull(ttpsd_qtyprog4,0) ttpsd_qtyprog4, ifnull(ttpsd_qtyprog5,0) ttpsd_qtyprog5, (tbudqsd_qtyrap_valid * tbudqsm_unitpriceupah) as totalrupiah, ( (tbudqsm1_qtyprog1*tbudqsm1_unitpriceupah*0.1)+(tbudqsm1_qtyprog2*tbudqsm1_unitpriceupah*(0.45-0.1))+(tbudqsm1_qtyprog3*tbudqsm1_unitpriceupah*(0.75-0.45))+(tbudqsm1_qtyprog4*tbudqsm1_unitpriceupah*(0.9-0.75))+(tbudqsm1_qtyprog5*tbudqsm1_unitpriceupah*(1-0.9)) ) as progress");
			$this->db->from("apj_inventory.tr_budget_qs_detail");
			$this->db->join("apj_inventory.tr_budget_qs_head", "tbudqsd_tbudqsh_id = tbudqsh_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_head_0", "tbudqsh_tbudqsh0_id = tbudqsh0_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master", "tbudqsm_mpro_id = tbudqsh0_mpro_id and tbudqsm_diskripsi_material = tbudqsd_diskripsi_material and tbudqsm_satuan = tbudqsd_satuan", "left");
			$this->db->join("apj_inventory.tr_budget_qs_master_1", "tbudqsm1_tbudqsh0_id = tbudqsd_tbudqsh0_id and tbudqsm1_diskripsi_material = tbudqsd_diskripsi_material and tbudqsm1_satuan = tbudqsd_satuan", "left");
			//$this->db->join("apj_inventory.tr_terpasang_head", "ttpsh_tbudqsh0_id = tbudqsh0_id and ttpsh_tanggal = '".$tgl."'", "left");
			$this->db->join("apj_inventory.tr_terpasang_head", "ttpsh_tbudqsh0_id = tbudqsh0_id and ttpsh_tanggal = date('".$tgl."') ", "left");
			$this->db->join("apj_inventory.tr_terpasang_detail", "ttpsd_ttpsh_id = ttpsh_id and ttpsd_diskripsi_material = tbudqsd_diskripsi_material and ttpsd_satuan = tbudqsd_satuan", "left");
			
			$this->db->where($condition);
			$this->db->order_by('tbudqsd_seq');
			//$this->db->limit(10);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	function get_rap_master($mpro_id='') {
			if ($mpro_id != '') {
				$condition = "tbudqsm_mpro_id = ".$mpro_id;
			} else {
				$condition = "1=1";
		 	}
			$this->db->select("*, (tbudqsm_qtyrap_0 * tbudqsm_unitpriceupah) total_upah_td, (tbudqsm_qtyrap_valid * tbudqsm_unitpriceupah) total_upah_sd");
			$this->db->from("apj_inventory.tr_budget_qs_master");

			//$this->db->join("apj_inventory.v_sum_rap", "mpro_id = tbudqsm_mpro_id and diskripsi = tbudqsm_diskripsi_material and satuan = tbudqsm_satuan", "left");
			//$this->db->join("apj_inventory.tr_budget_qs_head_0", "tbudqsh_tbudqsh0_id = tbudqsh0_id", "left");
			$this->db->where($condition);
			$this->db->order_by('tbudqsm_diskripsi_material');
			//$this->db->limit(20);
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		
	}

	function get_rap_header($id='', $rev='') {
		if ($id != '') {
			if ($rev != '') {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = ".$rev;
			} else {
				$condition = "tbudqsh_tbudqsh0_id = ".$id." and tbudqsh_rev_no = 0 ";
		 	}
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_budget_qs_head_0");
			//$this->db->join("apj_inventory.tr_budget_qs_head", "tbudqsd_tbudqsh_id = tbudqsh_id", "left");
			$this->db->join("apj_inventory.tr_budget_qs_head", "tbudqsh_tbudqsh0_id = tbudqsh0_id", "left");
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

	function get_RAPRev($id='') {
		if ($id != '') {
			$condition = "tbudqsh0_id = ".$id;
			$this->db->select("tbudqsh0_rev_no");
			$this->db->from("apj_inventory.tr_budget_qs_head_0");
			$this->db->where($condition);
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