<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Basic_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function lists()
    {

        $this->load->view('category/list', $this->data);
    }

}