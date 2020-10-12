<?php
    if(isset($_POST["judul"])){
        include 'koneksilogin.php';

        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];
        $file_gambar = $_FILES["file_gambar"];

        $connect->query("INSERT INTO berita (judul, kategori, isi, file_gambar) VALUES ('".$judul."', '".$kategori."', '".$isi."', '".$file_gambar."')");

        $tempdir = "gambar/"; 
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['file_gambar']['name']);

        //nama gambar
        $nama_gambar=$_FILES['file_gambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['file_gambar']['size']; 

        $fileinfo = @getimagesize($_FILES["file_gambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 

            if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $target_path)) {
                
                $connect->query("INSERT INTO berita(file_gambar) VALUES('".$nama_gambar."')");
                echo 'Simpan data berhasil';
            } else {
                echo 'Simpan data gagal';
            }
        header("location:berita.php");
        exit();
    }
?>