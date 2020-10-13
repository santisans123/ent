<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
<fieldset>
       <legend>BUAT PERBARUAN</legend> 
    <form action="uploaddata.php" enctype="multipart/form-data" method="POST">   
    <table>
        <tr>
            <td><label for="judul">Judul</label></td>
            <td><input type="text" name="judul" id="judul"></td>
        </tr>
        <tr>
            <td><label for="kategori">Kategori</label></td>
            <td><input type="text" name="kategori" id="kategori"></td>
        </tr>
        <tr>
            <td><label for="isi">Isi</label></td>
            <td><textarea name="isi" id="isi" rows="10" cols = "100"></textarea></td>
        </tr>
        <tr>
        <td><label for="tanggal">Tanggal</label></td>
            <td><input type="date" name="tanggal" required><br></td>
        </tr>
        <td><label  for="file_gambar">Gambar</label>  
            <input type="file" name="file_gambar" value="<?php echo $berita['file_gambar'] ?>"> 
        </tr>
        <tr>
            <td><button type="submit">Tambah</button></td>
        </tr>
    </table>
</fieldset>
    </form>
</body>
</html>