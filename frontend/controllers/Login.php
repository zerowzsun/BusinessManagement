<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Basic_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->loginStatus(null, 'Home');

        $this->load->library('Code','code');

        $this->load->model('User_model', 'user');
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

    /**
     * 登陆页面
     */
    public function index()
    {
        $this->load->view('login/login');
    }

    /**
     * 处理登陆
     */
    public function processLogin()
    {
        $data_post = $this->input->post();

        if( empty( $data_post['user_id'] ) && empty( $data_post['user_password'] ) )
        {
            jumpAlert('Login','用户名或密码未填写');
        }

        //$this->load->getUser( 'detail' , $data_post['user_id'] );

        $user = $this->user->loginVerification( $data_post['user_id'] );

        if( empty( $user ) )
        {
            jumpAlert('Login', '用户不存在');
        }

        $verification_result = password_verify( $data_post['user_password'], $user->user_password );

        if( !$verification_result )
        {
            jumpAlert('Login', '密码错误');
        }
        else
        {
            $session_array = array(
                'user_index'    => $user->user_index,
                'user_id'       => $user->user_id,
                'user_admin'    => $user->user_admin,
                'user_rand'     => rand(1000,9999)
            );

            $this->session->set_tempdata( $session_array , null, 43200);

            jumpAlert('Home', '登陆成功');
        }

    }

    /**
     * 注册页面
     */
    public function register()
    {
        $this->load->view('login/register');
    }

    /**
     * 处理用户注册
     */

    public function processRegister()
    {

    }


}