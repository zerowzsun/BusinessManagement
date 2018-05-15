<?php
class paging {

    public function __construct()
    {

    }

    private function paginations($config_array){
        $this->load->library('pagination');
        $config = array(
            'base_url'          => '',
            'total_rows'        => '',
            'per_page'          => '',
            'uri_segment'       => 3,
            'reuse_query_string'=> FALSE,
            'first_tag_open'    => '<li class="prev">',
            'first_link'        => '처음',
            'first_tag_close'   => '</li>',
            'prev_tag_open'     => '<li class="prev">',
            'prev_link'         => '이전',
            'prev_tag_close'    => '</li>',
            'next_tag_open'     => '<li class="next">',
            'next_link'         => '다음',
            'next_tag_close'    => '</li>',
            'last_tag_open'     => '<li class="next">',
            'last_link'         => '다음',
            'last_tag_close'    => '</li>',
            'num_tag_open'      => '<li>',
            'num_tag_close'     => '</li>',
            'attributes'        => array('class' => 'active'),
            'cur_tag_open'      => '<li class="active"><a>',
            'cur_tag_close'     => '</a></li>'
        );
        $config = array_replace($config,$config_array);
        $this->pagination->initialize($config);
        return  $this->pagination->create_links();
    }
}
