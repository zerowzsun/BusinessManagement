<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

    public function getUser( $type, $user_index = false )
    {
        $sql = "SELECT * FROM user
                LEFT JOIN user_info
                ON user.user_index = user_info.user_index ";

        switch($type)
        {
            case 'list':
                $sql .= "";
                return $this->db->query($sql)->result_array();
                break;
            case 'detail':
                $sql .= " WHERE user.user_index = ".$user_index;
                return $this->db->query($sql)->row();
                break;
        }

    }



    public function insertUser( $user_array, $user_info_array)
    {
        $this->db->trans_start();

        $this->db->insert( 'user', $user_array);

        $this->db->insert( 'user_infos', $user_info_array);

        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    public function loginVerification( $user_id )
    {
        $this->db->where( 'user_id', $user_id );

        return $this->db->get('user')->row();
    }

    public function updateUser( $data_array, $user_index)
    {
        $this->db->where('user_index', $user_index);

        return $this->db->update( 'user_info', $data_array );
    }

    public function deleteUser()
    {

    }
}