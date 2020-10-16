<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
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
                    <li><a href="order.php">Order</a></li>
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
    <li><a href="#">Beranda</a></li>
    <?php
                    if(empty($_SESSION['email'])){
                  ?>
                    <li><a href="page/login.php">Login</a></li>
                  <?php
                    }else{
                  ?>
                    <li><a href="page/order.php">Order</a></li>
                    <li><a href="page/profil.php">Profil</a></li>
                    <li><a href="logout.php">Logout</li>
                  <?php
                    }
                  ?>
  </ul>

  <!-- Card -->
  <div class="row">
    <div class="col s12 m6 ">
      <div class="card light-blue darken-1 center-align">
        <div class="card-content white-text">
          <span class="card-title">Transaksi Sukses</span>
          <i class="large material-icons">done</i>
          <p>Silahkan Cek Pesananmu , Untuk Melihat Status Pembelian</p>
        </div>
        <div class="card-action">
          <a href="#">Kembali Ke Menu Utama</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
