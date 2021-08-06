<?php 	
	//include("script/assets.php");
	
	/*
	$status = FALSE;
	if ( authorize($_SESSION["access"]["PELANGGAN"]["LIST TAGIHAN"]["create"]) || 
	authorize($_SESSION["access"]["PELANGGAN"]["LIST TAGIHAN"]["edit"]) || 
	authorize($_SESSION["access"]["PELANGGAN"]["LIST TAGIHAN"]["view"]) || 
	authorize($_SESSION["access"]["PELANGGAN"]["LIST TAGIHAN"]["delete"]) ) {
	 $status = TRUE;
	}

	if ($status === FALSE) {
	die("You dont have the permission to access this page");
	}
	*/

Class M_Authorize extends CI_Model {	

	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  

    public function get_permission($rolecode) {
		// try {

	        $condition = "mod_ismenu = 1";
	        $this->db->select("mod_modulegroupcode, mod_modulegroupname, mod_hastreeview");
	        $this->db->from("web_module");
			$this->db->where($condition);
	        $this->db->order_by("mod_modulegrouporder");  //, mod_moduleorder
	        $topMenus = $this->db->get();
	        // print_r($commonModules); echo "</br>";  echo "</br>";

	        //$this->db->select('mod_modulegroupcode, mod_modulegroupname, mod_modulepagename,  mod_modulecode, mod_modulename');
	        $this->db->select('*');
	        $this->db->from('web_module');
	        $this->db->where('mod_ismenu = 1');
	        $this->db->order_by('mod_modulegrouporder, mod_moduleorder');

	        $menus = $this->db->get();

	        $this->db->select('*');
	        $this->db->from('web_module');
	        $this->db->where('mod_ismenu = 0');
	        $this->db->order_by('mod_modulegrouporder, mod_moduleorder');

	        $properties = $this->db->get();
	        // print_r($allModules); echo "</br>";  echo "</br>";

	        $condition = "rr_rolecode =" . "'" . $rolecode . "'";
	        $this->db->select('rr_modulecode, rr_create,  rr_edit, rr_delete, rr_view');
	        $this->db->from('web_role_rights');
	        $this->db->where($condition);
	        $this->db->order_by('rr_modulecode');

	        $userRights = $this->db->get();
	        // print_r($userRights); "</br>";  echo "</br>";
	        // $_SESSION["access"] = set_rights($allModules, $userRights, $commonModules);

	        return $rights = $this->set_rights($menus, $userRights, $topMenus, $properties);
	        // print_r($rights);

	    // } catch (Exception $ex) {

	    //    echo $ex->getMessage();
	    // }
	}
	
    function set_rights($menus, $menuRights, $topmenu, $properties) {
	    $data = array();
	    
	    for ($i = 0, $c = $menus->num_rows(); $i < $c; $i++) {

	        $row = array();
	        for ($j = 0, $c2 = $menuRights->num_rows(); $j < $c2; $j++) {
	            if ($menuRights->result()[$j]->rr_modulecode == $menus->result()[$i]->mod_modulecode) {
	                // error disini  .. 
	                if ($this->authorize($menuRights->result()[$j]->rr_create) || $this->authorize($menuRights->result()[$j]->rr_edit) ||
	                        $this->authorize($menuRights->result()[$j]->rr_delete) || $this->authorize($menuRights->result()[$j]->rr_view)
	                ) {

	                    $row["menu"] 		= $menus->result()[$i]->mod_modulegroupcode;
	                	//$row["icon"] = $menus->result()[$i]->mod_icon;
	                    $row["menu_name"] 	= $menus->result()[$i]->mod_modulename;
	                    $row["page_name"] 	= $menus->result()[$i]->mod_modulepagename;
	                    $row["create"] 		= $menuRights->result()[$j]->rr_create;
	                    $row["edit"] 		= $menuRights->result()[$j]->rr_edit;
	                    $row["delete"] 		= $menuRights->result()[$j]->rr_delete;
	                    $row["view"] 		= $menuRights->result()[$j]->rr_view;
	                    $row["icon"] 		= $menus->result()[$i]->mod_icon;

	                    $data['menus'][$menus->result()[$i]->mod_modulegroupcode][$menuRights->result()[$j]->rr_modulecode] = $row;
	                    $data['menus'][$menus->result()[$i]->mod_modulegroupcode]["top_menu_name"] = $menus->result()[$i]->mod_modulegroupname;
	                    //$data[$menus->result()[$i]->mod_modulegroupcode]["icon"] = $menus->result()[$i]->mod_icon;
	                }
	            }
	        }
	    }

	    for ($i = 0, $c = $properties->num_rows(); $i < $c; $i++) {  // banyaknya properties (selain menus)

	        $row = array();
	        for ($j = 0, $c2 = $menuRights->num_rows(); $j < $c2; $j++) {
	            if ($menuRights->result()[$j]->rr_modulecode == $properties->result()[$i]->mod_modulecode) {  // jika nama properties == user right
	                
	                if ($this->authorize($menuRights->result()[$j]->rr_create) || $this->authorize($menuRights->result()[$j]->rr_edit) ||
	                        $this->authorize($menuRights->result()[$j]->rr_delete) || $this->authorize($menuRights->result()[$j]->rr_view)
	                ) {

	                    $row["prop"] 		= $properties->result()[$i]->mod_modulegroupcode;
	                	//$row["icon"] = $menus->result()[$i]->mod_icon;
	                    $row["prop_name"] 	= $properties->result()[$i]->mod_modulename;
	                    //$row["page_name"] 	= $properties->result()[$i]->mod_modulepagename;
	                    $row["create"] 		= $menuRights->result()[$j]->rr_create;
	                    $row["edit"] 		= $menuRights->result()[$j]->rr_edit;
	                    $row["delete"] 		= $menuRights->result()[$j]->rr_delete;
	                    $row["view"] 		= $menuRights->result()[$j]->rr_view;

	                    $data['prop'][$properties->result()[$i]->mod_modulegroupcode][$menuRights->result()[$j]->rr_modulecode] = $row;
	                    $data['prop'][$properties->result()[$i]->mod_modulegroupcode]["top_menu_name"] = $properties->result()[$i]->mod_modulegroupname;
	                    //$data[$menus->result()[$i]->mod_modulegroupcode]["icon"] = $menus->result()[$i]->mod_icon;
	                }
	            }
	        }
	    }
	    //print_r($data);
	    return $data;
	}

	public function authorize($module) {
	    return $module == "yes" ? TRUE : FALSE;
	}
	  

	public function auth($groupcode, $code, $crud) {
		$status = FALSE;
		if ( 
			authorize($_SESSION["access"]["$groupcode"]["$code"]["$crud"])) {
		 $status = TRUE;
		}

		if ($status === FALSE) {
			//die("You dont have the permission to access this page");
		}		
		return $status;
	}
	
	public function auth_all($groupcode, $code) {
		$status = FALSE;
		if ( 
			authorize($_SESSION["access"][$groupcode][$code]["create"]) || 
			authorize($_SESSION["access"][$groupcode][$code]["edit"]) || 
			authorize($_SESSION["access"][$groupcode][$code]["view"]) || 
			authorize($_SESSION["access"][$groupcode][$code]["delete"]) ) {
		 $status = TRUE;
		}

		if ($status === FALSE) {
			die("You dont have the permission to access this page");
		}		
		return $status;
	}

	
}	
	
?>