<?php
/**
 * Created by PhpStorm.
 * User: zerow
 * Date: 2018/1/26
 * Time: 16:07
 */
$db_host    = 'localhost';
$db_user    = 'root';
$db_passwd  = '';

    $conn = mysqli_connect( $db_host, $db_user, $db_passwd);

    if( !$conn )
    {
        die( 'Connect Failed:' .mysqli_error( $conn ) );
    }

    $array_state = array();

    mysqli_query( $conn, "set names utf8" );
    mysqli_select_db( $conn, 'RUNOOB' );
    mysqli_query( $conn, "SET AUTOCOMMIT=0" );

    mysqli_begin_transaction( $conn );

    $array_state[] = mysqli_query( $conn, "INSERT INTO runoob_transaction_test(id) VALUES(8)" );
    $array_state[] = mysqli_query( $conn, "INSERT INTO runoob_transaction_test(id) VALUES(9)" );

    if ( in_array( false, $array_state))
    {
        mysqli_query( $conn, "ROLLBACK");
    }


    mysqli_commit( $conn );

    mysqli_close( $conn );