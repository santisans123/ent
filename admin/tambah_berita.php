<?php

include "layout/header.php";

if(isset())

if(isset($_POST['tambah_berita']) && $_post['tambah_berita']=="TAMBAH"){
    
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($_FILES['gambar']['temp_name',"../upload/".$gambar])

    $query = mysql_query("INSERT INTO berita (id, kategori, judul, isi, gambar" VALUE('$id','$kategori','judul','isi','gambar'),$con);

    if(squery){
        header('location:list_berita.php');
    }
}

?>


<form action="" method="post" enctype="multipart/form-data">
    Judul: <input type="text" name="judul"><br>
    Kategori <select name="kategori">
                <option value="">-- Pilih kategori</option>
                <option value="1">-- Pilih kategori</option>
                <option value="2">-- Pilih kategori</option>
                <option value="3">-- Pilih kategori</option>
            </selection><br>
    Isi Berita:
    <textarea name="isi"></textarea><br>
    Gambar: <inpu type="file" name="gambar">
    <input type="submit" name="tambah_berita" value="TAMBAH">

</form>