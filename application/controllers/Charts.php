<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

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
		$this->title = "Charts";
	}

	public function index()	{
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/charts-chartjs.php');
	}

	function chartjs() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/charts-chartjs.php');
	}

	function apexcharts() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/charts_apexcharts.php');
	}

	function sparklines() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/charts_sparklines.php');
	}
}
