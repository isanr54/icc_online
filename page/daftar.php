<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="assets/css/register_style.css">
  <style>
      body{
  background-color: #dadada;
}
.form-login{
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  width:920px;
  background:#2196F3;  
}
.login-part{
  display:inline-block;  
  padding : 20px 35px;
  width:100%;
}
.center-align{
  color: white;
  transform:translate(0,-135%);
}
@media only screen and (max-width: 720px){
  .form-login{
    width:100%;
  }
}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script>
      $(document).ready(function() {
        M.updateTextFields();
      });
        
  </script>
</head>
<body style="background:#F1F1F1;">
  <div class="form-login">

    <div class="login-part white">
    <h4>Daftar</h4>
    <p>Isi Sesuai Identitas Anda</p>
    <form action="" method="post">
      <div class="input-field">
          <input name="name" type="text" class="validate">
          <label for="name">Nama Lengkap</label>
        </div>
        <div class="input-field">
          <input name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input name="no_hp" type="text" class="validate">
          <label for="no_hp">Nomor HP</label>
        </div>
        <div class="input-field">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      <button class="btn waves-effect waves-light right-align" type="submit" name="submit">Daftar
        <i class="material-icons right">create</i>
      </button>
      <p><a href="login.php">Sudah Punya Akun?</a></p>
    </form>
    </div>
    <!--
    <div class="login-part">
      <div class="center-align">
        <h4>Selamat Datang di ICC Online</h4>
        <p>Raih kesempatan untuk mendapatkan harga terbaik dari kami</p>
      </div>
    </div>
    -->
</body>
</html>
<?php
include '../conn/koneksi.php';

if(isset($_POST['submit'])){
 $nama=$_POST['name'];
 $no_hp = $_POST['no_hp'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $sql = "INSERT INTO users VALUES(11,'".$nama."','".$no_hp."','".$email."','".$password."',0)";
 mysqli_query($koneksi,$sql);
 
 echo "<script>window.location='login.php'</script>";
}
?>