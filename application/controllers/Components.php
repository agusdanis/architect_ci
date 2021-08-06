<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Components extends CI_Controller {

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
		$this->title = "Components";
	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function components_tabs() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_tabs');
	}

	function components_accordions() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_accordions');
	}

	function components_notifications() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_notifications');
	}

	function components_modals() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_modals');
		$this->load->view('themes/ArchitectUI/pages/sample/modals');  
	}

	function components_loading_blocks() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_loading_blocks');
	}

	function components_progress_bar() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_progress_bar');
	}

	function components_tooltips() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_tooltips');
	}

	function components_carousel() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_carousel');
	}

	function components_calendar() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_calendar');
	}

	function components_pagination() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_pagination');
	}

	function components_countup() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_countup');
	}

	function components_scrollable_elements() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_scrollable_elements');
	}

	function components_tree_view() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_tree_view');
	}

	function components_maps() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_maps');
	}

	function components_ratings() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_ratings');
	}

	function components_image_crop() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_image_crop');
	}

	function components_guided_tours() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/components_guided_tours');
	}
}
