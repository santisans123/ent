<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"

  </head>
  <body>
  <form class="form-signin" method="post" action="ceklogin.php">
  <div class="login">
     <div class="avatar">
     <i class="fa fa-user"></i>
     </div>

        <center><h1 class="h3 mb-3 font-weight-normal">PLEASE LOGIN</h1></center>

        <div class="box-login">
        <i class="fas fa-user"></i>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        </div>

        <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        
        <label>
        <div class="a">
        <input type="checkbox" value="remember-me" name="remember"> Remember Password </div>
        </label>
  
  <br>
  <button href="..\berita.php" class="btn-login" name="login" type="submit">LOGIN</button>
</form>
<center><div class="a">Portal Website &copy; PENS</div></center>
</div>
</body>
</html>
