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
</head>
<body>
<div class="wrapper">
  <header>
    <img src="gambar/logo2.jpg" alt="logo"width="275px" height="135px"/>
    <nav>
      <ul>
	    <li><a href="" class="current">HOME</a></li>
	    <li><a href="lihatvideo.php">VIDEO</a></li>
	    <li><a href="">KONTAK</a></li>
      </ul>
    </nav>
  </header>

<section class="courses">
    <?php
        include 'inc/koneksi.php';
        $getList = $connect->query("SELECT * FROM berita");
        while($generate = $getList->fetch_assoc()){
    ?>
    <hr>
    <center><h1 style="color: black;"><?=$generate['judul']?></h1></center>
    <p style="color:grey;"><?=$generate['kategori']?></p>
    <p><?=$generate['isi']?></p>
    <p><?=$generate['file_gambar']?></p>
    <?php
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
    - Hot News
    Berita Lingkungan PENS -

    <div class="change">
        <h3>Change color text</h3>
        <label>color:</label>
    <input type="color" id="text-color"/>
    </div>
  </section>
  </aside>
  <body>
  <footer>
    <!-- footer content here -->
  </footer>
<hr>
</html>

</html>
<script type="text/javascript">
        alert("Selamat Datang di Portal Berita Pens")
    </script>
<script type="text/javascript">
        var txtColor = document.getElementById('text-color');
        txtColor.addEventListener("change",(event) => {
            document.body.style.color = txtColor.value;
        });
    
</script>