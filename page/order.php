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

    <!-- Table -->
    <div class="container ">
      <h2 class="header">Pesanan Saya</h2>
        <table class="striped">
            <thead>
              <tr>
                  <th>Tanggal Transaksi</th>
                  <th>No Transaksi</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Status</th>
              </tr>
            </thead>
    
            <tbody>
              <?php
                $email=$_SESSION['email'];
                $i=1;
                $sql = $koneksi->query("SELECT * FROM transaksi WHERE email_user='".$email."'" );
                
                while($data=$sql->fetch_assoc()){
              ?>
              <tr>
                <input type="hidden" value="<?=$i?>">
                <td><?=$data['tanggal']?></td>
                <td><?=$data['nomor_transaksi']?></td>
                <td><?=$data['kode_produk']?></td>
                <td><?=$data['harga']?></td>
                <td>
                    SUKSES
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>    
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