<?php
    session_start();
    $_SESSION['status'] = "login"  ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login berita</title>
    <link rel="stylesheet" type="text/css" href="baca.css">

</head>
<body>
<div class="wrapper">
<header >
    <img src="gambar/logo2.jpg" alt="logo"width="275px" height="135px"/>
    <nav>
      <ul>
	    <li><a href="" class="current">HOME</a></li>
	    <li><a href="">VIDEO</a></li>
      <li><a href="">KONTAK</a></li>
      </ul>
      <div class="coba">
      <div class="main">
          <center><a>LOG OUT</a></center>
    </div>
    </div>
    </nav>
  </header>
<section class="courses">
<hr>
<div class="container" >
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        $generate = $getList->fetch_assoc();
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <center><h1 style="color:black;"><?=$generate['judul']?></h1></center>
    <p style="color:purple;"><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <p><?=$generate['gambar']?></p>
    <?php
        if($_SESSION['status'] = "login"){
            echo '<a href="edit.php?id='.$generate['id'].'"><button >Edit</button></a>';
            echo '<a href="delete.php?id='.$generate['id'].'"><button>Hapus</button></a>';
        }
      }
    ?>  
    <br>
    <br>
    <?php
    if($_SESSION['status'] = "login"){
    echo '<a href="create.php"><button>Tambah</button></a>';
    }
    ?>
</section>
<aside>
  <section class="POPULAR">
   <h2>POPULER</h2>
     <a href="">TEKNOLOGI</a>
     <a href="">OLAHRAGA</a>
     <a href="">UKM</a>
     <a href="">ORMAWA</a>
  </section>
  <section class="contact-details"><br>
    Hot News 
    Berita Lingkungan PENS
  </section>
  </aside>
<br>
<br>
</body>
<footer>
    <!-- footer content here -->
  </footer>
</html>