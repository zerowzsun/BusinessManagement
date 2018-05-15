<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends Basic_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->loginStatus('Login');
    }

    /**
     * 处理用户退出
     */

    public function out()
    {
        $session_array = array('user_index', 'user_id', 'user_admin', 'user_rand');
        $this->session->unset_userdata( $session_array );

        if( !isset( $_SESSION['user_index']) )
        {
            jumpAlert('Login', 'Logged out');
        }
    }
}