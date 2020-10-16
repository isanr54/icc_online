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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script>
      $(document).ready(function() {
        M.updateTextFields();
      });
        
  </script>
</head>
<body style="background:#F1F1F1;">
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
  <div class="form-login">

    <div class="login-part white">
    <h4>Daftar</h4>
    <p>Isi Sesuai Identitas Anda</p>
    <form action="" method="post">
      <div class="input-field">
          <input id="pulsa" type="text" class="validate">
          <label for="pulsa">Nama Lengkap</label>
        </div>
        <div class="input-field">
          <input id="pulsa" type="text" class="validate">
          <label for="pulsa">Username</label>
        </div>
        <div class="input-field">
          <input id="pulsa" type="text" class="validate">
          <label for="pulsa">Alamat</label>
        </div>
        <div class="input-field">
          <input id="pulsa" type="text" class="validate">
          <label for="pulsa">Nomor HP</label>
        </div>
        <div class="input-field">
          <input id="pulsa" type="text" class="validate">
          <label for="pulsa">Password</label>
        </div>
      <button class="btn waves-effect waves-light right-align" type="submit" name="action">Daftar
        <i class="material-icons right">create</i>
      </button>
      <p><a href="login.php">Sudah Punya Akun?</a></p>
    </form>
    </div>
    <div class="login-part">
      <div class="center-align">
        <h4>Selamat Datang di ICC Online</h4>
        <p>Raih kesempatan untuk mendapatkan harga terbaik dari kami</p>
      </div>
    </div>
</body>
</html>