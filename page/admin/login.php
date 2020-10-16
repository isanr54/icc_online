<?php
  include '../../conn/koneksi.php';
?>
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
  <style>
  body{
  background : url("../img/bkg.jpg");
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
    width:49%;
  }
  .center-align{
    color: white;
    transform:translate(0,-60%);
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
<body style="background:#F1F1F1">
<div class="form-login">
    <div class="login-part white">
    <h4>Login</h4>
    <p>Silahkan Masukan Username dan Password</p>
    <form method="post">
        <div class="input-field">
            <input id="email" name="email" type="text" class="validate">
            <label for="email">E-Mail</label>
          </div>
          <div class="input-field">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
      <button name="submit" class="btn waves-effect waves-light right-align " type="submit" >Login
        <i class="material-icons right">exit_to_app</i>
      </button>
      <p><a href="">Lupa Password?</a></p>
    </form>
    </div>
    <div class="login-part">
      <div class="center-align">
        <h4>Daftar Sekarang</h4>
        <p>Raih kesempatan untuk mendapatkan harga terbaik dari kami</p>
        <a class="btn waves-effect waves-light right-align pulse" href="../daftar.php">Daftar
         <i class="material-icons left">create</i>
      </a> 
      </div>
    </div> 
  </div>
</body>
</html>
<?php
  @session_start();
    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query=$koneksi->query("SELECT * FROM admin WHERE email='".$email."' and password='".$password."' ");
    $data=$query->fetch_assoc();
    if(mysqli_num_rows($query)>0){
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      echo "<script>window.location ='index.php'</script>";
    }else{
      echo "<script>window.location ='login.php'</script>";
    }
  }
?>