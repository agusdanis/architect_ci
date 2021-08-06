<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elements extends CI_Controller {

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
		$this->title = "Elements";
	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function buttons() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/buttons');
	}

	function buttons_pills() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/buttons_pills');
	}

	function buttons_square() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/buttons_square');
	}

	function buttons_shadow() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/buttons_shadow');
	}

	function buttons_icons() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/buttons_icons');
	}

	function dropdowns() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dropdowns');
	}

	function icons() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/icons');
	}

	function badges() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/badges');
	}

	function cards() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/cards');
	}	

	function elements_loaders() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/elements_loaders');
	}

	function elements_list_group() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/elements_list_group');
	}

	function elements_navigation() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/elements_navigation');
	}

	function elements_timelines() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/elements_timelines');
	}

	function elements_utilities() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/elements_utilities');
	}
}
