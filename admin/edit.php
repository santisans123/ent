<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
<?php
    include 'inc/koneksi.php';

    if(!isset($_GET["id"])){
        header("location:berita.php");
    }

    $id = $_GET["id"];
    $getData = $connect->query("SELECT * FROM berita WHERE id = '".$id."'");
    $data = mysqli_fetch_array($getData);
?>
    <fieldset>      
    <legend>UBAH PEMBARUAN</legend>
    <form action="editdata.php" method="POST">    
    <table>
        <tr>
            <td><label for="judul">Judul</label></td>
            <td><input type="text" name="judul" id="judul" value="<?=$data["judul"]?>"></td>
        </tr>
        <tr>
            <td><label for="kategori">Kategori</label></td>
            <td><input type="text" name="kategori" id="kategori" value="<?=$data["kategori"]?>"></td>
        </tr>
        <tr>
            <td><label for="isi">Isi</label></td>
            <td><textarea name="isi" id="isi" rows="10" cols = "100"><?=$data["isi"]?></textarea></td>
            <input type="hidden" name="id" value="<?=$data["id"]?>">
        </tr>
        <tr>
        <td><label for="tanggal">Tanggal</label></td>
            <td><input type="date" name="tanggal" required><br></td>
        </tr>
        <tr>
        <td><label class="control-label" for="inputGambar">Gambar Berita</label></td>
            <td><input type="file" name="gambar" id="gambar" required></td>
        </tr>
        <tr>
            <td><button type="submit">Ubah</button></td>
        </tr>
    </table>
    </form>
    </fieldset>
</body>
</html>