<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

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
		$this->title = "Dashboards";
	}

	/*
	function index() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_analytics');
	}
	*/

	function dashboards_commerce() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_commerce');
	}

	function dashboards_commerce_v2() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_commerce_variation');
	}

	function dashboards_sales() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_sales');
	}

	function dashboards_minimal_1() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_minimal_1');
	}

	function dashboards_minimal_2() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_minimal_2');
	}

	function dashboards_crm() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/dashboards_crm');
	}
}
