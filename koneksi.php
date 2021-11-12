<?php

$server ="localhost";
$user="root";
$password="";
$database="data_pelanggan";

$con= mysqli_connect($server,$user,$password, $database);

if( !$con ){
    die("Gagal Terhubung Dengan Database : " . mysqli_connect_error());
}
?>