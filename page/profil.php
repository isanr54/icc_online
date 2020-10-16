<?php
include '../conn/koneksi.php';
  session_start();
  if(empty($_SESSION['email'])){
    echo "<script>window.location='../index.php';</script>";
  }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ICC Online | Pusat Pulsa Murah</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-fixed" >
    <nav class="blue" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">ICC Online</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../">Beranda</a></li>
                    <li><a href="order.php">Pesanan</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
  </div>

    <!-- Side Nav [Responsive Mobile] -->
    <ul class="sidenav" id="mobile-nav">
    <li class="brand-logo center"><h5>ICC Online</h5></li>
    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="order.php">Pesanan</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="../logout.php">Logout</a></li>
  </ul>
  <!-- Content -->
  <?php
    $sql=$koneksi->query("SELECT * FROM users WHERE email='".$_SESSION['email']."' ");
      $data=$sql->fetch_assoc();
  ?>
  <div class="container">
    <div class="row">
      <div class="col s4  center-align">
        <h4>Saldo Akun</h4>
        <div class="card">
          <div class="card-content">
            <div class="text-center">
              <p>RP. <?=number_format($data['saldo'],'0','.','.')?></p>
            </div>
          </div>
        </div>
        <p>Aktifan PayLater Sekarang</p>
        <p>Hubungi CS : 081395563858 (WA)</p>
      </div>
      <div class="col s8">
        <h4>Data Profil</h4>
        <br>
        <form action="" method="post">
          <div class="input-field">
            <input name="nama" type="text" class="validate" value="<?=$data['nama']?>">
            <label for="nama">Nama Lengkap</label>
          </div>
          <div class="input-field">
            <input name="email" type="text" class="validate" value="<?=$data['email']?>" disabled>
            <label for="email">E-Mail</label>
          </div>
          <div class="input-field">
            <input name="no_hp" type="text" class="validate" value="<?=$data['no_hp']?>">
            <label for="no_hp">Nomor Telepon</label>
          </div>
          <div class="input-field">
            <input name="password" type="password" class="validate" value="<?=$data['password']?>">
            <label for="password">Password</label>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Konfirmasi
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>  
   document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.sidenav');
          var instances = M.Sidenav.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>
</body>
</html>
<?php
    if(isset($_POST['action'])){
        $nama=$_POST['nama'];
        $no_hp=$_POST['no_hp'];
        $password=$_POST['password'];
        
        $sql = "UPDATE users SET nama='".$nama."' , no_hp='".$no_hp."', password='".$password."' WHERE email='".$_SESSION['email']."' ";
        mysqli_query($koneksi,$sql);
        
        echo "<script>window.location='profil.php'</script>";
    }
  }   
?>