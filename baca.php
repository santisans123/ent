<?php
    session_start();
    $_SESSION['status'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" type="text/css" href="baca.css">
<body style="background-image: url('gambar/bg_berita.jpg');  background-size:cover;">
<header >
<hr>
<center><h1>BERITA</h1></center>
<div class="container" >
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <h1 style="color: purple;"><?=$generate['judul']?></h1>
    <p style="color:blue;"><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <p><?=$generate['gambar']?></p>
    <?php
    }
?>
</html>