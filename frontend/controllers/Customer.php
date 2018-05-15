<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Basic_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model', 'customer');
    }


    public function process( $type, $customer_index = false )
    {
        $data_post = $this->input->post();
        switch ( $type )
        {
            case 'create':

                $customer_array = array(
                    'customer_create_date' => time()
                );

                $cs_info_array = array(
                    'cs_info_name'      => $data_post['cs_info_name'],
                    'cs_info_tax'       => $data_post['cs_info_tax'],
                    'cs_info_contact'   => $data_post['cs_info_contact'],
                    'cs_info_mobile'    => $data_post['cs_info_mobile'],
                    'cs_info_tel'       => $data_post['cs_info_tel'],
                    'cs_info_mail'      => $data_post['cs_info_mail'],
                    'cs_info_address'      => $data_post['cs_info_address']
                );

                $result = $this->customer->createCustomer( $customer_array, $cs_info_array );

                if( $result )
                {
                    jumpAlert('customer/lists', 'Create Success');
                }
                else
                {
                    jumpAlert('customer/cs_add', 'Create Failed');
                }

                break;
            case 'modify':

                $cs_info_array = array(
                    'cs_info_name'      => $data_post['cs_info_name'],
                    'cs_info_tax'       => $data_post['cs_info_tax'],
                    'cs_info_contact'   => $data_post['cs_info_contact'],
                    'cs_info_mobile'    => $data_post['cs_info_mobile'],
                    'cs_info_tel'       => $data_post['cs_info_tel'],
                    'cs_info_mail'      => $data_post['cs_info_mail'],
                    'cs_info_address'      => $data_post['cs_info_address']
                );

                $result = $this->customer->modifyCustoerInfo( $cs_info_array, $customer_index );

                if( $result )
                {
                    jumpAlert('customer/list', 'Modify Success');
                }
                else
                {
                    jumpAlert('customer/detail/'.$customer_index, 'Modify Failed');
                }

                break;

        }
    }

    public function add()
    {
        $this->load->view('customer/cs_add');
    }

    public function lists()
    {
        $this->data['cs_list'] = $this->customer->getCustomerList();

        $this->load->view('customer/cs_list' ,$this->data);
    }

    public function detail( $customer_index )
    {
        $this->data['customer_index']   = $customer_index;
        $this->data['cs_detail']        = $this->customer->getCustomerDetail( $customer_index );

        $this->load->view('customer/cs_detail', $this->data);
    }


}