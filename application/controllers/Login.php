<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('ArchitectUI');
		$this->stencil->slice('head');
		//$this->stencil->slice('navbar');
		//$this->stencil->slice('theme_settings');
		//$this->stencil->slice('sidebar');
		//$this->stencil->slice('footer');
		$this->stencil->slice('script');
		$this->stencil->layout('default_login');
		$this->title = "Login";

	}

	/*
	public function index() {
		$this->stencil->title('Dashboard');
		$this->stencil->paint('sample/sample');
	}
	*/

	function login() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/login');
	}

	function login_boxed() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/login_boxed');
	}

	function register() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/register');
	}

	function register_boxed() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/register_boxed');
	}

	function forgot_password() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forgot_password');
	}

	function forgot_password_boxed() {
		$this->stencil->title($this->title);
		$this->stencil->paint('sample/forgot_password_boxed');
	}

}
