<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

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
		$this->stencil->layout('default_apps');
		$this->title = "Apps";
	}

	/*
	function index() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_analytics');
	}
	*/

	function apps_mailbox() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_mailbox');
	}

	function apps_chat() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_chat');
	}

	function apps_faq_section() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_faq_section');
	}
}
