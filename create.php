<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="uploaddata.php" method="POST">    
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
            <td><textarea name="isi" id="isi" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><label for="gambar">Gambar</label></td>
            <td><input type="image" name="gambar" id="gambar"></td>
        </tr>
        <tr>
            <td><button type="submit">Tambah</button></td>
        </tr>
    </table>
    </form>
</body>
</html>