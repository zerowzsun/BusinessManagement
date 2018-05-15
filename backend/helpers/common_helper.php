<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// error()错误返回
if( ! function_exists('error')){
    function error($msg){
        header('Content-Type:text/html;charest=utf-8');
        echo "<script type='text/javascript'>alert('$msg');window.history.go(-1);</script>";
        exit;
    }
}
//success()成功跳转
if( ! function_exists('success')){
    function success($url, $msg){
        header('Content-Type:text/html;charset=utf-8');
        $url = site_url($url);
        echo "<script type='text/javascript'>alert('$msg');location.href='$url'</script>";
        exit;
    }
}

if( ! function_exists('jump')){
    function jump($url){
        $url = site_url($url);
        echo "<script type='text/javascript'>location.href='$url'</script>";
        exit;
    }
}

