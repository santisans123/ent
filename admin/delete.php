<?php
    if(isset($_GET["id"])){
        include 'login/koneksilogin.php';

        $id = $_GET["id"];
        $connect->query("DELETE FROM berita WHERE id = '".$id."'");

        header("location:berita.php");
        exit();
    }
?>