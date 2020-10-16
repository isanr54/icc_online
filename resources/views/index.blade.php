<?php
  session_start();
  $_SESSION['username'] = 'ikhsan';
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
      margin-top:-650px;    
    }
    .caption h3{
      color:whitesmoke;
      font-size:5rem;
    }
    .benefit{
      margin-top: 225px;
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
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script>
      $(document).ready(function() {
         $('select').material_select();
      });
   </script>
    <script>
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
                    <li><a href="index.php">Beranda</a></li>
                    <?php
                      if(isset($_SESSION['username'])){
                    ?>
                    <li><a href="order.php">Order</a></li>
                    <li><a class="modal-trigger" href="#profil" data-target="profil">Ikhsan Rasidin</a></li>
                    <?php
                      }else{
                    ?>
                    <li><a href="login.php">Login</a></li>
                    <?php
                      }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
  </div>

  <div id="profil" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  <!-- Side Nav [Responsive Mobile] -->
  <ul class="sidenav" id="mobile-nav">
    <li class="brand-logo center"><h5>ICC Online</h5></li>
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Produk</a></li>
    <li><a href="#">Login</a></li>    
  </ul>

  <!-- Main Background -->
    <div class="sliders Slider">
      <div class="slides">
        <img src="https://cdn2.slidemodel.com/wp-content/uploads/13081-01-gradient-designs-powerpoint-backgrounds-16x9-1-870x489.jpg" alt="" class="bkg">
      </div>
    </div>

  <!-- Main Menu -->
  
  <!--  -->
  <div class="wrap-content">

  <div class="caption center-align">
    <h3>Pelayanan PPOB Terbaik</h3>
  </div>

  <div class="container main-menu">
  <div class="card ">
      <div class="card-tabs ">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a class="active" href="#pulsa">Pulsa</a></li>
          <li class="tab"><a href="#data">Paket Data</a></li>
          <li class="tab"><a href="#game">Voucher Games</a></li>
          <li class="tab"><a href="#pln">Listrik PLN</a></li>
          <li class="tab"><a href="#pdam">PDAM</a></li>
          <li class="tab"><a href="#bpjs">BPJS</a></li>
          <li class="tab"><a href="#multi">Multi Finance</a></li>
          <li class="tab"><a href="#bpjs">Top Up</a></li>
        </ul>
      </div>
      <div class="card-content grey lighten-4">
        <div id="pulsa" class="active" style="display: block;">
          <div class="row">
            <div class="input-field col s12">
              <input id="pulsa" type="text" class="validate">
              <label for="pulsa">No Handphone</label>
            </div>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Nominal</option>
                  <option value="1">5.000</option>
                  <option value="2">10.000</option>
                  <option value="3">20.000</option>
                </select>
              </div>
            <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <div id="data">
            <div class="row">
                <div class="input-field col s12">
                  <input id="pulsa" type="text" class="validate">
                  <label for="pulsa">No Handphone</label>
                </div>
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Pilih Paket Data</option>
                      <option value="1">1 GB</option>
                      <option value="2">2 GB</option>
                      <option value="3">5 GB</option>
                    </select>
                  </div>
                <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
                  <i class="material-icons right">send</i>
                </button>
              </div>
        </div>
        <div id="game">
            <div class="row">
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Pilih Voucher Game</option>
                      <option value="1">Free Fire</option>
                      <option value="2">Garena</option>
                      <option value="3">Play Store</option>
                    </select>
                  </div>
                <div class="input-field col s12">
                  <input id="pulsa" type="text" class="validate">
                  <label for="pulsa">ID User</label>
                </div>
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Pilih Nominal</option>
                      <option value="1">120 Diamond</option>
                      <option value="2">250 Diamond</option>
                      <option value="3">533 Diamond</option>
                    </select>
                  </div>
                <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
                  <i class="material-icons right">send</i>
                </button>
              </div>
        </div>
        <div id="pln">
            <div class="row">
                <div class="input-field col s12">
                  <input id="pulsa" type="text" class="validate">
                  <label for="pulsa">No Meter</label>
                </div>
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Pilih Nominal</option>
                      <option value="1">20.000</option>
                      <option value="2">50.000</option>
                      <option value="3">100.000</option>
                    </select>
                  </div>
                <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
                  <i class="material-icons right">send</i>
                </button>
              </div>
        </div>
        <div id="pdam">
            <div class="row">
                <div class="input-field col s12">
                  <input id="pulsa" type="text" class="validate">
                  <label for="pulsa">No Meter</label>
                </div>
                <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
                  <i class="material-icons right">send</i>
                </button>
              </div>
        </div>
        <div id="bpjs">
            <div class="row">
                <div class="input-field col s12">
                  <input id="pulsa" type="text" class="validate">
                  <label for="pulsa">No Anggota</label>
                </div>
                <button class="btn waves-effect waves-light right-align" type="submit" name="action">Beli
                  <i class="material-icons right">send</i>
                </button>
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
            <img src="assets/img/discount.png" alt="" class="circle responsive">
            <div class="center-align">
              <h5>2. Harga Murah</h5>
              <p>Harga lebih bersaing dibandingkan dengan retail lainnya</p>
            </div>
          </div>
          <div class="col l4 s12">
            <img src="assets/img/24-hours.png" alt="" class="circle responsive">
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
            <p class="grey-text text-lighten-4">ICC Online adalah situs PPOB (Payment Point Online Banking) yang beroperasi di SMKN 1 Katapang</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Sitemap</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Beranda</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Promo</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Berita</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Daftar Produk</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 Copyright ICC Online All Right Reserved
        <a class="grey-text text-lighten-4 right" href="#!">Ikuti Fan Page Kami</a>
        </div>
      </div>
    </footer>
        
  </div>
</body>
</html>