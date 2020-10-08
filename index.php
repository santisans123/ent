<?php
    session_start();
    $_SESSION['status'] = "qwe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body >
    <hr>
<center><h1>PORTAL BERITA</h1></center>
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <h1><?=$generate['judul']?></h1>
    <p><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <p><?=$generate['gambar']?></p>
    <?php
        if($_SESSION['status'] == "login"){
            echo '<a href="edit.php?id='.$generate['id'].'"><button class="btn btn-warning">Edit</button></a>';
            echo '<a href="delete.php?id='.$generate['id'].'"><button class="btn btn-danger">Hapus</button></a>';
        }
    }
?>
<hr>
<?php
if($_SESSION['status'] == "login"){
    echo '<a href="create.php"><button>Tambah</button></a>';
}
?>
</body>
</html>