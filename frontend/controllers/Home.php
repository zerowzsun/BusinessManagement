<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Basic_Controller {

	public function __construct()
    {
	    parent::__construct();

        $this->loginStatus('Login');
	}

	public function index()
	{
		$this->load->view('home');
	}
}
