<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Basic_Controller {

    public function __construct(){
        parent::__construct();

        $this->loginStatus('Login');

        $this->load->model( 'User_model', 'user' );

    }

    public function userProcess( $type, $index = null )
    {
        $data_post  = $this->input->post();

        //var_dump( $data_post ); exit;

        switch ($type)
        {
            /*case 'create':

                $password               = $data_post['user_password'];
                $password_verification  = $data_post['password_verification'];

                if( $password !=  $password_verification  )
                {
                    jumpAlert('');
                }

                $password = password_hash( $data );

                $user_array = array(
                    'user_id' => $data_post['user_id'],
                    'user_password' => $data_post['user_password'],
                    'user_admin'    => 0,
                    'user_create_date'  => $data_post['user_create_date'],
                    'user_status'   => 1
                );

                $info_array = array(
                    'user_nick'     => $data_post['user_nick'],
                    'user_department' => $data_post['user_department'],
                    'user_position' => $data_post['user_position'],
                    'user_mobile_1' => $data_post['user_mobile_1'],
                    'user_mobile_2' => $data_post['user_mobile_2'],
                    'user_tel'      => $data_post['user_tel'],
                    'user_email'    => $data_post['user_email'],
                );

                $process_result = $this->user->createUser( $user_array, $info_array );

                break;*/
            /*case 'password':
                break;*/
            case 'modify':

                $user_index = !empty( $data_post['user_index'] ) ? $data_post['user_index'] : $index;

                $info_array = array(
                    'user_name'     => $data_post['user_name'],
                    'user_nick'     => $data_post['user_nick'],
                    'user_department' => $data_post['user_department'],
                    'user_position' => $data_post['user_position'],
                    'user_mobile_1' => $data_post['user_mobile_1'],
                    'user_mobile_2' => $data_post['user_mobile_2'],
                    'user_tel'      => $data_post['user_tel'],
                    'user_email'    => $data_post['user_email'],
                );

                $result = $this->user->updateUser( $info_array, $user_index);

                if( $result )
                {
                    jumpAlert('user/userDetail/'.$user_index, '修改成功');
                }
                else
                {
                    jumpAlert('user/userDetail/'.$user_index, '修改失败');
                }

                break;
            /*case 'remove':
                break;*/
        }
    }

    /*public function addUser()
    {
        $this->load->view('user/add');
    }*/

    public function userList()
    {
        $this->data['user_list'] = $this->fetchUser('list');

        $this->load->view('user/user_list', $this->data);
    }

    public function userDetail( $user_index )
    {

        //$user_index = $this->uri->segment(3);

        $this->data['user_detail'] = $this->fetchUser('detail',$user_index );

        $this->load->view('user/user_Detail', $this->data);

    }

    /*public function remoteUserNickAjax(){
        $user_nick = preg_replace('#[^\x{4e00}-\x{9fa5}A-Za-z0-9]#u','',$this->input->post('user_nick'));

        $result_num = $this->basics->getSqlDate('num_rows', 'user_info', 'user_nick', $user_nick);
        //if($result_num > 0 ){
        //  echo "false";
        //}else{
        //    echo "true";
        //}
        echo $user_nick.$result_num;
    }*/
}
