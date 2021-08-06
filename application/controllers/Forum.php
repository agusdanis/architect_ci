<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

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
		$this->title = "Apps Forum";
	}

	/*
	function index() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_analytics');
	}
	*/

	function apps_forum_list() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_forum_list');
	}

	function apps_forum_threads() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_forum_threads');
	}

	function apps_forum_discussion() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/apps_forum_discussion');
	}
}
