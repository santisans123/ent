<?php
    if(isset($_POST["judul"])){
        include 'inc/koneksi.php';

        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];
        $gambar = $_FILES["filegambar"];

        $connect->query("INSERT INTO berita (judul, kategori, isi) VALUES ('".$judul."', '".$kategori."', '".$isi."')");

        $tempdir = "gambar/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['filegambar']['name']);

        //nama gambar
        $nama_gambar=$_FILES['filegambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['filegambar']['size']; 

        $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 

            if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                
                $connect->query("INSERT INTO berita(gambar) VALUES('".$nama_gambar."')");
                echo 'Simpan data berhasil';
            } else {
                echo 'Simpan data gagal';
            }
        header("location:index.php");
        exit();
    }
?>