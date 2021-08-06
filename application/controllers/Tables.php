<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('ArchitectUI');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('theme_settings');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('footer');
		$this->stencil->slice('app_drawer');
		$this->stencil->slice('script');
		$this->stencil->layout('default');
		$this->title = "Tables";
	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function datatables() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/datatables');
	}

	function regulartables() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/regulartables');
	}

	function gridtables() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/gridtables');
	}

}
