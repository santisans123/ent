<?php
    include 'inc/koneksi.php';

    if(isset($_POST["id"])){

        $id = $_POST["id"];
        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];
        $gambar = $_POST["gambar"];

        $connect->query("UPDATE berita SET judul = '".$judul."', kategori = '".$kategori."', isi = '".$isi."' WHERE id = '".$id."'");

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
        if($ukuran_gambar > 81920){ 
            echo 'Ukuran gambar melebihi 80kb';
        }else{
            if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                
                $connect->query("UPDATE berita SET gambar = '".$nama_gambar."'");
                echo 'Simpan data berhasil';
            } else {
                echo 'Simpan data gagal';
            }
        } 
        header("location:index.php");
        exit();
    }
?>