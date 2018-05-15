<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends Basic_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('Code','code');
    }

    public function code()
    {
        $config = array(
            'width'	  =>130,
            'height'  =>50,
            'codeLen' =>4,
            'fontSize'=>22
        );
        $this->load->library('code', $config);
        $this->code->show();
    }

    public function remoteCaptcha()
    {
        $captcha = $this->input->post('captcha');
        if(strtoupper($captcha) == $_SESSION['code'])
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
}