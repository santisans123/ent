<?php

$con = mysql_connect('localhost','root','' );
$db = mysql_select_db('challange', $con);

if ($con && $db){
    echo"koneksi Terhubung";
}else{
    echo"Koneksi gagal";
}

?>