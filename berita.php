<?php
    session_start();
    $_SESSION['status'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background-image: url('gambar/bg_berita.jpg');  background-size:cover;">
<header >
<hr>
<center><h1>BERITA</h1></center>
<div class="container" >
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        $generate = $getList->fetch_assoc();
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <h1 style="color:blue;"><?=$generate['judul']?></h1>
    <p style="color:purple;"><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <p><?=$generate['gambar']?></p>
    <?php
        if($_SESSION['status'] == "login"){
            echo '<a href="edit.php?id='.$generate['id'].'"><button class="btn btn-warning">Edit</button></a>';
            echo '<button class="btn btn-danger" type="button"data-toggle="modal" data-target="#exampleModal">Hapus</button>';
        }
    }
?>
<br>
</div>
<!-- Modal -->
<div style="color: black;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yakin untuk menghapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <?php echo '<a href="delete.php?id='.$generate['id'].'<button class="btn btn-danger">Ya</button></a>'; ?>
      </div>
    </div>
  </div>
</div>
<?php
if($_SESSION['status'] == "login"){
    echo '<a href="create.php"><button>Tambah</button></a>';
}
?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>