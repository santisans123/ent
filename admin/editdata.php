<?php
    include 'login/koneksilogin.php';

    if(isset($_POST["id"])){

        $id = $_POST["id"];
        $judul = $_POST["judul"];
        $kategori = $_POST["kategori"];
        $isi = $_POST["isi"];
        $file_gambar = $_POST["file_gambar"];

        $connect->query("UPDATE berita SET judul = '".$judul."', kategori = '".$kategori."', isi = '".$isi."' WHERE id = '".$id."'");

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
        if($ukuran_gambar > 81920){ 
            echo 'Ukuran gambar melebihi 80kb';
        }else{
            if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $target_path)) {
                
                $connect->query("UPDATE berita SET file_gambar = '".$nama_gambar."'");
                echo 'Simpan data berhasil';
            } else {
                echo 'Simpan data gagal';
            }
        } 
        header("location:berita.php");
        exit();
    }
?>