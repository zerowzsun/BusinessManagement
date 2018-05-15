<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_Controller extends CI_Controller {

    //private $category_index;
    //private $article_index;
    private $login_verification_controllers = array( 'login' );

    public function __construct()
    {
        parent::__construct();

        //$this->loginStatus('Login');

    }

    /**
     * @param $login_url
     * $this->loginStatus('Login');
     *
     * 规则 1： 页面未登陆状态不能访问。
     * 规则 2： 页面未登录能访问。
     * 规则 3： 页面登录状态不能访问。
     * 规则 4： 页面登陆状态能访问。
     */

    public function loginStatus( $login_url = null, $logout_url = null )
    {

        if( empty( $_SESSION['user_index'] ) )
        {
            if( $login_url != null )
            {
                jump( $login_url );
            }

        }
        else
        {
            if( $logout_url != null )
            {
                jump( $logout_url );
            }
        }
    }

    public function fetchUser( $type, $user_index = null )
    {
        switch($type)
        {
            case 'list':
                $sql = "SELECT * FROM user LEFT JOIN user_info ON user.user_index = user_info.user_index";

                return $this->db->query( $sql )->result_array();

                break;
            case 'detail':
                $sql = "SELECT * FROM user LEFT JOIN user_info ON user.user_index = user_info.user_index WHERE user.user_index = ".$user_index;

                return $this->db->query( $sql )->row();
                break;
        }

    }


    /*public function fetchCategory()
    {
        $this->data['category_list'] = '';
    }

    public function fetchCategoryDetail()
    {
        $this->data['category_detail'] = '';
    }

    public function fetchPage()
    {
        $this->data['page'] = '';
        $this->data['parent'] = '';
    }*/



}
