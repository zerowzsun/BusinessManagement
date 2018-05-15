<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    /**
     * 新增一条客户信息
     * @param $customer_array customer 表
     * @param $cs_info_array customer_info 表
     * @return mixed
     */
    public function createCustomer( $customer_array, $cs_info_array )
    {
        $this->db->trans_start();

        $this->db->insert('customer', $customer_array);

        $cs_info_array['customer_index'] = $this->db->insert_id();

        $this->db->insert('customer_info', $cs_info_array);

        $this->db->trans_complete();

        return $this->db->trans_status;
    }

    public function getCustomerList(  )
    {
        $sql = 'SELECT * FROM customer 
                LEFT JOIN customer_info ON customer.customer_index = customer_info.customer_index
                ';
    }

}
