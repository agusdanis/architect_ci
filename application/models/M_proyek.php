<?php

Class M_Proyek extends CI_Model {

	
	// Read data using username and password
	function input_data($table, $data) {
		$this->db->insert($table, $data);
	}

	function get_proyek_skope($id='') {
		if ($id == '') {
			$condition = "1=1 ";
		} else {
			$condition = "psk_mpro_id = ".$id;
		}
			$this->db->select("*");
			$this->db->from("ms_proyek_skope");
			$this->db->join("ms_skope", "mskp_id = psk_skp_id", "left");
			$this->db->where($condition);
			$this->db->order_by('psk_mpro_id, mskp_kode');
			
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			}
	}

	function get_list_proyek($id='') {
		
		if ($id == '') {
			$condition = "mpro_isdel = 0 and mpro_webview = 1";
		} else {
			$condition = " mpro_id in (".$id. ") and mpro_webview = 1";
		}
		/*
		$this->db->select("A.*, 
				cast(group_concat( mskp_kode SEPARATOR '; ') as char(20)) skp_kode,
				(mpro_totalkontrak/1000000000) totalkontrak,
				(mpro_eq_nilai/1000000000) total_eq, 
				(mpro_in_nilai/1000000000) total_in, 
				(mpro_lb_nilai/1000000000) total_lb, 
				(mpro_progress_mg-mpro_progress_mgll) as prog_minggu_ini, 
				(mpro_progress_bl-mpro_progress_blll) as prog_bulan_ini, 
				(mpro_progress_bl-mpro_rencana_bl) as dev_bulan_ini,
				datediff(mpro_tanggalselesai,date(now())) as days_left, 
				0 as prog_material, 
				0 as prog_upah,
				0 as prog_bpb ");
		$this->db->from("ms_proyek A");
		$this->db->join("ms_proyek_skope", "mpro_id = psk_mpro_id", "left");
		$this->db->join("ms_skope", "mskp_id = psk_skp_id", "left");
				
		$this->db->where($condition);
		$this->db->group_by('mpro_id');
		$this->db->order_by('mpro_kodeproyek', 'DESC');
		$query = $this->db->get();
		$subQuery1 = $this->db->_compile_select();
		$this->db->_reset_select();


		$this->db->select("B.*, 
				'' skp_kode,
				0 totalkontrak,
				0 total_eq, 
				0 total_in, 
				0 total_lb, 
				0 as prog_minggu_ini, 
				0 as prog_bulan_ini, 
				0 as dev_bulan_ini,
				0 as days_left, 
				ifnull(round((sum(tbudqsm_material_value)/sum(tbudqsm_rap_valid_value))*100,2),0) as prog_material, 
				ifnull(round((sum(tbudqsm_progress_value)/sum(tbudqsm_rap_valid_value))*100,2),0) as prog_upah,
				ifnull(round((sum(tbudqsm_bpb_value)/sum(tbudqsm_rap_valid_value))*100,2),0) as prog_bpb ");
		$this->db->from("ms_proyek B");
		$this->db->join("apj_inventory.tr_budget_qs_master", "tbudqsm_mpro_id = mpro_id", "left");		
				
		$this->db->where($condition);
		$this->db->group_by('mpro_id');
		$this->db->order_by('mpro_kodeproyek', 'DESC');
		$query = $this->db->get();
		$subQuery2 = $this->db->_compile_select();
		$this->db->_reset_select();

		$this->db->select("*, sum(prog_material), sum(prog_bpb), sum(prog_upah)");
		$this->db->from("($subQuery1 UNION subQuery2)");
		$query = $this->db->get();
		/*

		/*
		$this->db->query("*, sum(prog_material), sum(prog_bpb), sum(prog_upah), sum(prog_material) from ($subQuery1 UNION subQuery2) as unionTable");
		$this->db->get();
		*/
		$sql = $this->db->query("select *, sum(prog_material) progress_material, sum(prog_bpb) progress_bpb, sum(prog_upah) progress_upah, 
			sum(prog_material), ifnull(round((sum(mandays)/sum(tbudqsm_rap_valid_value))*100,2),0) progress_mandays from (
			select A.*, cast(group_concat( mskp_kode SEPARATOR '; ') as char(20)) 
			skp_kode, (mpro_totalkontrak/1000000000) totalkontrak, (mpro_eq_nilai/1000000000) total_eq, 
			(mpro_in_nilai/1000000000) total_in, (mpro_lb_nilai/1000000000) total_lb, 
			round((mpro_progress_mg-mpro_progress_mgll),2) as prog_minggu_ini, 
			round((mpro_progress_bl-mpro_progress_blll),2) as prog_bulan_ini, 
			round((mpro_progress_bl-mpro_rencana_bl),2) as dev_bulan_ini,
			datediff(mpro_tanggalselesai,date(now())) as days_left, 
			0 as prog_material ,0 as prog_upah, 0 as prog_bpb, 0 as tbudqsm_rap_valid_value, 0 as mandays 
			from apj_master.ms_proyek A 
			join apj_master.ms_proyek_skope on mpro_id = psk_mpro_id 
			join apj_master.ms_skope on mskp_id = psk_skp_id 
			where ".$condition."
			group by mpro_id 
			union all 
			select  B.*, '' skp_kode, 0 totalkontrak, 0 total_eq, 0 total_in, 0 total_lb, 
			0 as prog_minggu_ini, 0 as prog_bulan_ini, 0 as dev_bulan_ini, 0 as days_left, 
			ifnull(round((sum(tbudqsm_material_value/tbudqsm_rap_valid_value))*100,2),0) as prog_material ,
			ifnull(round((sum(tbudqsm_progress_value/tbudqsm_rap_valid_value))*100,2),0) as prog_upah, 
			ifnull(round((sum(tbudqsm_bpb_value/tbudqsm_rap_valid_value))*100,2),0) as prog_bpb, 
			ifnull(sum(tbudqsm_rap_valid_value),0), 
			0 as mandays
			from apj_master.ms_proyek B join apj_inventory.tr_budget_qs_master on tbudqsm_mpro_id = mpro_id 
			where ".$condition."
			group by mpro_id
			union all 
			select  C.*, '' skp_kode, 0 totalkontrak, 0 total_eq, 0 total_in, 0 total_lb, 0 as prog_minggu_ini, 0 as prog_bulan_ini, 0 as dev_bulan_ini, 0 as days_left, 0 as prog_material , 0 as prog_upah, 0 as prog_bpb, 0 as tbudqsm_rap_valid_value, ifnull(sum(mandays_value),0) as mandays 
			from apj_master.ms_proyek C join apj_inventory.v_daily_sum_produktivitas on ttpsh0_mpro_id = mpro_id 
			where ".$condition."
			group by mpro_id

		) a group by mpro_id order by mpro_id DESC ");




		if($sql->num_rows() > 0) {
			return $sql->result();
		}
	}

	function get_NamaProyek() {
		
		$condition = "mpro_isdel = 0 and mpro_webview = 1";
		$this->db->select("mpro_id, mpro_namaproyek, mpro_kodeproyek, concat(mpro_kodeproyek,' ',mpro_namaproyek) as proyek"); 
		$this->db->from("ms_proyek");
		$this->db->where($condition);
		$this->db->order_by('mpro_kodeproyek', 'DESC');
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result();
		}
	}

	function get_list_staff($id='') {
		
		if ($id == '') {
			$condition = "usr_isdel = 0 and usr_isactive = 'true' ";
		} else {
			$condition = " usr_id in (".$id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_master.web_users");
		//$this->db->join("ms_proyek_skope", "mpro_id = psk_mpro_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		$this->db->order_by('usr_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		}
	}

	function get_list_subkon($id='') {
		
		if ($id == '') {
			$condition = "msub_isdel = 0 and msub_isactive = 1 ";
		} else {
			$condition = " msub_id in (".$id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_master.ms_subkon");
		//$this->db->join("ms_proyek_skope", "mpro_id = psk_mpro_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		$this->db->order_by('msub_nama_subkon', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		}
	}

	function get_staffProyek($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "mpers_isactive = 1 ";
		} else {
			$condition = " mpers_mpro_id in (".$mpro_id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_master.ms_personil_proyek");
		//$this->db->join("ms_proyek_skope", "mpro_id = psk_mpro_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_supervisorProyek($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "mpers_isactive = 1 and mpers_jabatan = 'SUPERVISOR'";
		} else {
			$condition = " mpers_mpro_id in (".$mpro_id. ") and mpers_jabatan = 'SUPERVISOR'";
		}
		$this->db->select("*");
		$this->db->from("apj_master.ms_personil_proyek");
		$this->db->join("web_users", "mpers_userid = usr_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_spkProyek($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "tspk_isdel = 0 ";
		} else {
			$condition = " tspk_mpro_id in (".$mpro_id. ") and tspk_isdel = 0";
		}
		$this->db->select("*");
		$this->db->from("apj_inventory.tr_spk_subkon_head");
		//$this->db->join("apj_inventory.tr_", "mpers_userid = usr_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_subkonProyek($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "msubpro_isactive = 1 ";
		} else {
			$condition = " msubpro_mpro_id in (".$mpro_id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_master.ms_subkon_proyek");
		$this->db->join("apj_master.ms_subkon", "msubpro_msub_id = msub_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_SPKSubkon($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "tspk_isdel = 0 ";
		} else {
			$condition = " tspk_mpro_id in (".$mpro_id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_inventory.tr_spk_subkon_head");
		$this->db->join("apj_master.ms_subkon", "tspk_msub_id = msub_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function get_detailSPKSubkon($spk_id='') {
		
		if ($spk_id == '') {
			$condition = "tspk_isdel = 0 ";
		} else {
			$condition = " tspk_id in (".$spk_id. ") ";
		}
		$this->db->select("*");
		$this->db->from("apj_inventory.tr_spk_subkon_head");
		$this->db->join("apj_master.ms_subkon", "tspk_msub_id = msub_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		//$this->db->order_by('mkary_namalengkap', 'ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_subkonProyekOnRAP($mpro_id='', $spv_id='', $tgl='') {
		
		if (($mpro_id !== '')) {
			if ($spv_id !== '') {
			$condition = "mpro_id = ".$mpro_id." and spv_id = ".$spv_id;
			} else {
				$condition = "mpro_id = ".$mpro_id;
			}
		
			$this->db->select("A.*, ttpsh1_msub_id, ifnull(B.ttpsh1_id,0) ttpsh1_id, ifnull(B.ttpsh1_manpower,0) ttpsh1_manpower, ifnull((ttpsh1_manpower * 200000),0) AS mandays_value,
  ifnull(SUM(total_prog),0) AS total_prog,
  ifnull(SUM((total_prog / (ttpsh1_manpower * 200000))),0) AS produktivitas");
			$this->db->from("apj_inventory.v_spv_subkon_rap A");
			$this->db->join("apj_inventory.tr_terpasang_head_1 B", "mpro_id = ttpsh1_mpro_id and msub_id = ttpsh1_msub_id and ttpsh1_tanggal = '".$tgl."'", "left");
			$this->db->join("apj_inventory.v_daily_prog_val C", "ttpsd_ttpsh1_id = ttpsh1_id", "left");		
			$this->db->where($condition);
			$this->db->group_by('msub_id');
			//$this->db->order_by('mkary_namalengkap', 'ASC');
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		} else {
			return false;
		}
	}


	function list_proyek() {
		
		if ($this->session->userdata('allproyek') == 0) {
			$this->load->model('m_login');
			$mpro_id = $this->m_login->get_user_proyek($this->session->userdata('user_id'));
			if ($mpro_id[0]->mpro_id != '') {
				$data = $this->get_list_proyek($mpro_id[0]->mpro_id);
			} else {
				$data = $data = $this->get_list_proyek(14);
			}
		} else {
			$data = $this->get_list_proyek();
		}
		return $data;
	}

	public function get_terpasang_head($mpro_id='', $user_id='') {
		
		if ($mpro_id != '') {
			if ($user_id != '') {
				$condition = 'ttpsh0_mpro_id = '.$mpro_id.' and ttpsh0_createduserid = '.$user_id ;
				
				$this->db->select("*,SUM(mandays_value) AS mandays_value, IFNULL(SUM(total_prog), 0) AS progress, round(ifnull((IFNULL(SUM(total_prog), 0) / ifnull(SUM(mandays_value),0)),0),0) AS produktivitas");
				$this->db->from("apj_inventory.tr_terpasang_head_0");
				$this->db->join("apj_inventory.v_daily_produktivitas","ttpsh1_mpro_id = ttpsh0_mpro_id and ttpsh1_tanggal = ttpsh0_tanggal", "left");
				$this->db->where($condition);
				$this->db->group_by("ttpsh0_createduserid, ttpsh0_tanggal");
				$this->db->order_by("ttpsh0_tanggal", "DESC");
				$query = $this->db->get();
				
			} else {
				$condition = 'ttpsh0_mpro_id = '.$mpro_id;
				
				$this->db->select("*");
				$this->db->from("apj_inventory.v_daily_sum_produktivitas");
				$this->db->where($condition);
				$this->db->order_by("ttpsh0_tanggal", "DESC");
				$query = $this->db->get();
				
			}

			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	public function get_terpasang_head_0($mpro_id='', $tgl='') {
		
		if ($mpro_id != '') {
			if ($tgl != '') {
				$condition = 'ttpsh0_mpro_id = '.$mpro_id.' and ttpsh0_tanggal = date("'.$tgl.'")' ;
			} else {
				$condition = 'ttpsh0_mpro_id = '.$mpro_id.' and ttpsh0_isdel = 0';
			}

			$this->db->select("*");
			$this->db->from("apj_inventory.tr_terpasang_head_0");
			$this->db->where($condition);
			$query = $this->db->get();
				

			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		} else { return false; }
	}

	public function get_terpasang_head_1($mpro_id='', $tgl='', $msub_id='', $spv_id='') {
		
		if (($mpro_id != '') && ($tgl !='')) {
			if (($msub_id != '') && ($spv_id != '')) {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id.' and ttpsh1_tanggal = date("'.$tgl.'")'.' and ttpsh1_msub_id = '.$msub_id.' and ttpsh1_spv_id = '.$spv_id ;
			} else {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id.' and ttpsh1_tanggal = date("'.$tgl.'") and ttpsh1_isdel = 0';
			}

			$this->db->select("*");
			$this->db->from("apj_inventory.tr_terpasang_head_1");
			$this->db->where($condition);
			$query = $this->db->get();
				

			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		} else { return false; }
	}

	public function get_terpasang_detailId($mpro_id='', $ttpsh_id='', $tbudqsd_id='') {
		
		if (($mpro_id != '')) {
			if (($ttpsh_id != '') && ($tbudqsd_id != '')) {
				$condition = "`ttpsd_mpro_id` = ".$mpro_id." and `ttpsd_ttpsh_id` = ".$ttpsh_id." and `ttpsd_tbudqsd_id` = ".$tbudqsd_id ;
			} else {
				$condition = 'ttpsd_mpro_id = '.$mpro_id.' and ttpsd_ttpsh_id = '.$ttpsh_id;
			}

			$this->db->select("ttpsd_id");
			$this->db->from("apj_inventory.tr_terpasang_detail");
			$this->db->where($condition);
			$query = $this->db->get();

			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		} else { return false; }
	}


	public function get_terpasang_head_by_subkon($mpro_id='', $msub_id='') {
		
		if ($mpro_id != '') {
			if ($msub_id != '') {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id.' and ttpsh1_msub_id = '.$msub_id ;
			} else {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id;
			}	
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_terpasang_head_1");
			$this->db->join("apj_master.ms_subkon","ttpsh1_msub_id = msub_id", "left");
			$this->db->where($condition);
			//$this->db->group_by("ttpsh0_createduserid, ttpsh0_tanggal");
			$this->db->order_by("ttpsh1_tanggal", "DESC");
			$query = $this->db->get();
				
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	public function get_headerTerpasang($tbudqsh0_id='', $tgl='') {
		
		if ($tbudqsh0_id != '') {
			if ($tgl != '') {
				$condition = 'ttpsh_tbudqsh0_id = '.$tbudqsh0_id.' and ttpsh_tanggal = date("'.$tgl.'")' ;
			} else {
				$condition = 'ttpsh_tbudqsh0_id = '.$tbudqsh0_id;
			}	
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_terpasang_head");
			//$this->db->join("apj_master.ms_subkon","ttpsh1_msub_id = msub_id", "left");
			$this->db->where($condition);
			//$this->db->group_by("ttpsh0_createduserid, ttpsh0_tanggal");
			$this->db->order_by("ttpsh_tanggal", "DESC");
			$query = $this->db->get();
				
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	public function get_headerLapHar($header_id='') {
		
		if ($header_id != '') {
			$condition = 'ttpsh1_id = '.$header_id ;
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_terpasang_head_1");
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	function get_detailMPHarian($mpro_id='', $spv_id='', $tgl='') {
		if ($tgl !== '') {
			if ($spv_id !=='') {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id.' and ttpsh1_createduserid = '.$spv_id. ' and ttpsh1_tanggal = date("'.$tgl.'") ';
			} else {
				$condition = 'ttpsh1_mpro_id = '.$mpro_id.' and ttpsh1_tanggal = date("'.$tgl.'") ';
			}
			$this->db->select("*, ttpsh1_msub_id msub_id");
			$this->db->from("apj_inventory.v_daily_produktivitas");
			//$this->db->from("apj_inventory.tr_terpasang_head_1 A");
			//$this->db->join("apj_master.ms_subkon B", "msub_id = ttpsh1_msub_id", "left");
			//$this->db->join("apj_inventory.v_daily_prog_val C", "ttpsd_ttpsh1_id = ttpsh1_id", "left");
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	function get_HeaderRAPSubkon($mpro_id='', $msub_id= '', $spv_id='') {
		if ($spv_id !== '') {
			if ($msub_id !== '') {
				$condition = 'tbudqsh0_mpro_id = '.$mpro_id.' and tbudqsh0_spvid = '.$spv_id. ' and tbudqsh0_subkonid = '.$msub_id;
			} else {
				$condition = 'tbudqsh0_mpro_id = '.$mpro_id.' and tbudqsh0_spvid = '.$spv_id;
			}
		} else {
			if ($msub_id !== '') {
				$condition = 'tbudqsh0_mpro_id = '.$mpro_id.' and tbudqsh0_subkonid = '.$msub_id;
			} else {
				$condition = 'tbudqsh0_mpro_id = '.$mpro_id;
			}
		}
			$this->db->select("*");
			$this->db->from("apj_inventory.tr_budget_qs_head_0");
			$this->db->join("apj_master.ms_subkon", "msub_id = tbudqsh0_subkonid", "left");
			$this->db->join("apj_master.web_users", "usr_id = tbudqsh0_spvid", "left");
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		
	}

	function get_daily_produktivitas($mpro_id) {
		
		if ($mpro_id !== '') {
			$condition = "ttpsh0_mpro_id = ".$mpro_id;
			$this->db->select("*");
			$this->db->from("apj_inventory.v_daily_sum_produktivitas");
			$this->db->where($condition);
			$this->db->order_by('ttpsh0_tanggal', 'ASC');
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
	}

	function get_listBonUpah($mpro_id='', $tglMulai='', $tglAkhir='') {
		
		if ($mpro_id == '') {
			$condition = "tbu_mpro_id = ".$mpro_id." and (date(tbu_tanggal) >= date('".$tglMulai."') and date(tbu_tanggal) <= date('".$tglAkhir."'))";
		} else {
			$condition = "tbu_mpro_id = ".$mpro_id." and (date(tbu_tanggal) >= date('".$tglMulai."') and date(tbu_tanggal) <= date('".$tglAkhir."'))";
		}
		$this->db->select("*");
		$this->db->from("apj_inventory.tr_bonupah");
		$this->db->join("apj_master.tr_spk_old", "tspko_mpro_id = tbu_mpro_id and tbu_nokontrak = tspko_nokontrak", "left");
		$this->db->join("apj_master.ms_pemborong", "tspko_mpbr_id = mpbr_id", "left");
		$this->db->join("apj_master.ms_pekerjaan_subkon", "tspko_mpsub_id = mpsub_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		//$this->db->group_by('mpro_id');
		$this->db->order_by("mpbr_namapemborong, mpsub_pekerjaan, tbu_tanggal", "DESC");
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

	function get_listSPKOld($mpro_id='') {
		
		if ($mpro_id == '') {
			$condition = "tspko_mpro_id = ".$mpro_id;
		} else {
			$condition = "tspko_mpro_id = ".$mpro_id;
		}
		$this->db->select("mpbr_namapemborong, mpsub_pekerjaan, tspko_id, tspko_area, tspko_budget,
					tspko_totalkontrak, tspko_totalambil, tspko_keterangan, sum(tbu_nilaiambil) totalambil");
		$this->db->from("apj_master.tr_spk_old");
		$this->db->join("apj_inventory.tr_bonupah", "tspko_mpro_id = tbu_mpro_id and tbu_tspko_id = tspko_id", "left");
		//$this->db->join("apj_master.tr_spk_old", "tspko_mpro_id = tbu_mpro_id and tbu_nokontrak = tspko_nokontrak", "left");
		$this->db->join("apj_master.ms_pemborong", "tspko_mpbr_id = mpbr_id", "left");
		$this->db->join("apj_master.ms_pekerjaan_subkon", "tspko_mpsub_id = mpsub_id", "left");
		//$this->db->join("ms_skope", "skp_id = psk_skp_id", "left");		
		$this->db->where($condition);
		$this->db->group_by('tspko_mpro_id, mpbr_id, mpsub_id');
		$this->db->order_by("mpbr_namapemborong, mpsub_pekerjaan");
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
				return false;
			}
	}

}

?>