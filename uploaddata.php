<?php
    if(isset($_POST["judul"])){
        include 'inc/koneksi.php';

        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];

        $connect->query("INSERT INTO berita (judul, kategori, isi) VALUES ('".$judul."', '".$kategori."', '".$isi."')");

        header("location:index.php");
        exit();
    }
?>