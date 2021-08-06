<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {

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
		$this->title = "Widgets";
	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function widgets_chart_boxes1() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/widgets_chart_boxes1');
	}

	function widgets_chart_boxes2() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/widgets_chart_boxes2');
	}

	function widgets_chart_boxes3() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/widgets_chart_boxes3');
	}

	function widgets_profile_boxes() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/widgets_profile_boxes');
	}

	
}
