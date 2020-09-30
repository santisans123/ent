<?php
    include 'inc/koneksi.php';

    if(isset($_POST["id"])){

        $id = $_POST["id"];
        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];
        $gambar = $_POST["gambar"];

        $connect->query("UPDATE berita SET judul = '".$judul."', kategori = '".$kategori."', isi = '".$isi."' WHERE id = '".$id."'");

        header("location:index.php");
        exit();
    }

?>