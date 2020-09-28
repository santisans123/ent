<?php

$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,'challange');

if ($con && $db){
    echo"koneksi Terhubung";
}else{
    echo"Data Base Error";
}

?>