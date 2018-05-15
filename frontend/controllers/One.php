<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class my {
    public function say(){
        echo "say:".$this->says;
    }
}

class One extends Basic_Controller {

    public function __construct(){

    }

    public function index(){
        $my = new my();
        $my->says = "王八蛋"; 
        $my->say();
        $str = serialize($my);
        file_put_contents('C:\www\BusinessManagement\one.txt', $str);
        
        print_r((array)$my);
        var_dump($my);
    }
    public function xx(){
        $str = file_get_contents('C:\www\BusinessManagement\one.txt');
        $my = unserialize($str);
        $my->says = "王八蛋"; 
        $my->say();
    }
}
