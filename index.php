<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
<center><h1>BERITA</h1></center>
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <h1><?=$generate['judul']?></h1>
    <p><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <a href="edit.php?id=<?=$generate['id']?>"><button>Edit</button></a>
    <a href="delete.php?id=<?=$generate['id']?>"><button>Hapus</button></a>
    <?php } ?>
    <hr>
    <a href="create.php"><button>Tambah</button></a>
</body>
</html>