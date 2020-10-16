<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="assets/css/login_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script>
      $(document).ready(function() {
        M.updateTextFields();
      });
  </script>
</head>
<body style="background:#F1F1F1">
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
<div class="form-login">


    <div class="login-part white">
    <h4>Login</h4>
    <p>Silahkan Masukan Username dan Password</p>
    <form method="post">
        <div class="input-field">
            <input id="username" type="text" class="validate">
            <label for="username">Username</label>
          </div>
          <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
      <button class="btn waves-effect waves-light right-align " type="submit" name="action">Login
        <i class="material-icons right">exit_to_app</i>
      </button>
      <p><a href="">Lupa Password?</a></p>
    </form>
    </div>
    <div class="login-part">
      <div class="center-align">
        <h4>Daftar Sekarang</h4>
        <p>Raih kesempatan untuk mendapatkan harga terbaik dari kami</p>
        <a class="btn waves-effect waves-light right-align pulse" href="daftar.php">Daftar
         <i class="material-icons left">create</i>
      </a> 
      </div>
    </div>
</body>
</html>
<?php
  session_start();
  
    if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "<script>window.location.href ='index.php'</script>";
    }
?>