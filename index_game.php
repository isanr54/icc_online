<?php
  include 'conn/koneksi.php';
  session_start();
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
  <style>
    ::-webkit-scrollbar {
      height: 3px;
      width : 5px;
    }
    ::-webkit-scrollbar-track {
      background: #2196F3; 
    }
    ::-webkit-scrollbar-thumb {
      background:#F1F1F1; 
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #FFF; 
    }
    .transparent{
      background: rgba(57,57,57,0.25) !important;
    }
    .nav-color{
      background: #2196F3 ;
    }
    .bkg{
      margin-top: -75px;
      width:100%;
    }
    .wrap-content{
      margin-top:-900px;    
    }
    .caption h3{
      color:whitesmoke;
      font-size:5rem;
    }
    .benefit{
      margin-top: 350px;
    }
    .main-menu{
      margin-top :75px;
    }
    button.btn.waves-effect.waves-light.right-align{
      margin-left: 10px;
    }
    .promo{
      margin-top: 170px;
    }
    /* .benefit{
      background:rgb(232,232,232);
    } */
    .circle{
      margin-top: 25px;
      width:70%;
      height:70%;
    }
    select{
      display:block;
    }
    @media only screen and (max-width: 1080px) {
      .main-menu{
      margin-top :550px;
      }
    }
  </style>
  

</head>
<body>
  <!-- Navbar -->
  <div class="navbar-fixed" >
    <nav class="transparent" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">ICC Online</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Beranda</a></li>

                    <?php
                    if(empty($_SESSION['email'])){
                  ?>
                    <li><a href="page/login.php">Login</a></li>
                  <?php
                    }else{
                  ?>
                    <li><a href="page/order.php">Pesanan</a></li>
                    <?php
                        $sql = $koneksi->query("SELECT * FROM users WHERE email='".$_SESSION['email']."' ");
                        $data = $sql->fetch_assoc();
                      ?>
                      <li><a href="page/profil.php">ICC Pay Anda : Rp.<?=number_format($data['saldo'],0,'.','.')?></a></li>
                    <li><a href="logout.php">Logout</li>
                  <?php
                    }
                  ?>
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
                    <li><a href="page/order.php">Pesanan</a></li>
                    <li><a href="page/profil.php">ICC Pay Anda : Rp.<?=number_format($data['saldo'],0,'.','.')?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                  <?php
                    }
                  ?>
  </ul>

  <!-- Main Background -->
    <div class="sliders Slider">
      <div class="slides">
        <img src="https://1.bp.blogspot.com/-0SOnqsXwwzw/XlMi2tfB6zI/AAAAAAAAArs/d0oO41pacscpeLFuQD5onZlOxAd6Gog7wCLcBGAsYHQ/s1600/Reef.jpg" alt="" class="bkg">
      </div>
    </div>

  <!-- Main Menu -->
  
  <!--  -->
  <div class="wrap-content">

  <div class="caption center-align">
    <h3>Beli Vocuher Game Murah dan Cepat</h3>
  </div>

  <div class="container main-menu">
  <div class="card ">
      <div class="card-tabs ">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a href="index.php">Pulsa</a></li>
          <li class="tab"><a class="active" href="index_game.php">Voucher Game</a></li>
        </ul>
      </div>
      <div class="card-content grey lighten-4">
        <div id="pulsa" class="active" style="display: block;">
          <div class="row">
          <form action="page/konfirmasi.php" method="post">
            <div class="input-field col s12">
              <input id="pulsa" name="no_hp" type="text" class="validate" placeholder="Masukan ID yang akan diisi">
              
            </div>
            <div class="input-field col s12">
                <select id="provider" name="provider" onchange="fetch_select(this.value);">
                  <option>Pilih Operator</option>
                  <?php
                    $select=$koneksi->query("SELECT * FROM kode_game GROUP BY nama_produk");
                    while($row=$select->fetch_assoc())
                    {
                      echo "<option value='".$row['kode_produk']."'>".$row['nama_produk']."</option>";
                    }
                  ?>
                </select>
                
              </div>
              <div class="input-field col s12">
                <select id="nominal" name="nominal">
  
                </select>
              </div>
            <button type="submit" class="btn waves-effect waves-light right-align">Beli</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Benefit -->
  <div class="benefit">
    <div class="container">
      <div class="title center-align">
        <h2>Keuntungan Pembelian Di ICC</h2>
        <div class="row">
          <div class="col l4 s12">
            <img src="assets/images/buy.png" alt="" class="circle responsive">
            <div class="center-align">
              <h5>1. Pembelian Mudah</h5>
              <p>Hanya Sekali Klik Anda Sudah Bisa Melakukan Pembelian</p>
            </div>
          </div>
          <div class="col l4 s12">
            <img src="assets/images/discount.png" alt="" class="circle responsive">
            <div class="center-align">
              <h5>2. Harga Murah</h5>
              <p>Harga lebih bersaing dibandingkan dengan retail lainnya</p>
            </div>
          </div>
          <div class="col l4 s12">
            <img src="assets/images/24-hours.png" alt="" class="circle responsive">
            <div class="center-align">
              <h5>3. 24 Jam Non-Stop</h5>
              <p>Kami terus beroperasi 24 jam setiap hari tanpa henti</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
    <footer class="page-footer blue">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Tentang Kami</h5>
            <p class="grey-text text-lighten-4">ICC Online adalah bagian dari ICC Corporation</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Sitemap</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#">Beranda</a></li>
              <li><a class="grey-text text-lighten-3" href="page/redeem.php">Promo</a></li>
              <li><a class="grey-text text-lighten-3" href="page/daftar_harga.php">Daftar Produk</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2020 Copyright ICC Online by ICC Corporation All Right Reserved | V 1.01
        <a class="grey-text text-lighten-4 right" href="www.instagram.com/isanr54">Ikuti Fan Page Kami</a>
        </div>
      </div>
    </footer>
        
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
  function fetch_select(val)
            {
            $.ajax({
            type: 'post',
            url: 'data_game.php',
            data: {
              get_option:val
            },
            success: function (response) {
              document.getElementById("nominal").innerHTML=response; 
            }
            });
            }
      $(document).ready(function() {
         $('select').material_select();
      });

   
        
        window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 690 || document.documentElement.scrollTop > 690) {
                    document.getElementById("navbar").classList.remove('transparent');
                    document.getElementById("navbar").classList.add('nav-color');

                }else{
                    document.getElementById("navbar").classList.add('transparent');
                }
            }
          
           

     </script>
</body>
</html>