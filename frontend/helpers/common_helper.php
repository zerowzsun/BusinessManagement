<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// jumpBack()返回上一页
if( ! function_exists('error')){
    function jumpBack( $msg = false ){
        header('Content-Type:text/html;charest=utf-8');
        echo "<script type='text/javascript'>alert('$msg');window.history.go(-1);</script>";
        exit;
    }
}
//success()
if( ! function_exists('jumpAlert')){
    function jumpAlert($url, $msg){
        header('Content-Type:text/html;charset=utf-8');
        $url = site_url($url);
        echo "<script type='text/javascript'>alert('$msg');location.href='$url'</script>";
        exit;
    }
}
//(直接跳转)
if( ! function_exists('jump')){
    function jump($url){
        $url = site_url($url);
        echo "<script type='text/javascript'>location.href='$url'</script>";
        exit;
    }
}

/**
 * return fomated value of array
 * @param  [type] $arr [array]
 */
if ( ! function_exists('formatArray'))
{
    function formatArray($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

/**
 * return fomated value of var_dump
 * @param  [type] $object [object]
 */
if ( ! function_exists('formatDump'))
{
    function formatDump($object){
        echo "<pre>";
        var_dump($object);
        echo "</pre>";
    }
}

