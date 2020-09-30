<?php
    if(isset($_GET["id"])){
        include 'inc/koneksi.php';

        $id = $_GET["id"];
        $connect->query("DELETE FROM berita WHERE id = '".$id."'");

        header("location:index.php");
        exit();
    }
?>