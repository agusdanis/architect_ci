<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

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
		$this->title = "Forms";
	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function forms_controls() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_controls');
	}

	function forms_layouts() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_layouts');
	}

	function forms_validation() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_validation');
	}

	function forms_wizard() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_wizard');
	}

	function forms_datepicker() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_datepicker');
	}

	function forms_rangeslider() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_rangeslider');
	}

	function forms_inputselects() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_inputselects');
	}

	function forms_toogle_switch() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_toogle_switch');
	}

	function forms_wysiwyg_editor() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_wysiwyg_editor');
	}

	function forms_inputmask() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_input_mask');
	}

	function forms_clipboard() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_clipboard');
	}

	function forms_textarea_autosize() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forms_textarea_autosize');
	}
}
