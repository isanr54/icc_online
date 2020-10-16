<?php
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
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="order.php">Pesanan</a></li>
                    <li><a href="profil.php">Profil</a></li>
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

  <div class="container">
    <div class="col s12 m7">
        <h2 class="header">Transaksi Sukses</h2>
        <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <div class="text-center">
                    <p>Silahkan Tunggu Kami Sedang Memproses</p>
                    <a href="../index.php">Kembali Ke Beranda</a>
                </div>
            </div>
        </div>
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
}
?>