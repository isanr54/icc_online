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
  <title>ICC Online | Profil</title>
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
    <li><a href="#">Beranda</a></li>
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
      <div class="col s12">
        <h4>INPUT VOUCHER</h4>
        <br>
        <form action="" method="post">
          <div class="input-field">
            <input name="voucher" type="text" placeholder="Masukan Kode Voucher">
            <label for="voucher">Kode Voucher</label>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="submit">Konfirmasi
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
    if(isset($_POST['submit'])){
        $voucher=$_POST['voucher'];
       

        //Check Query
        $query=$koneksi->query("SELECT * FROM voucher WHERE kode_voucher='".$voucher."' ");
        $data=mysqli_num_rows($query);

        if($data>=1){
            //DELETE Kode Voucher 
            $delete_query = "DELETE FROM voucher WHERE kode_voucher='".$voucher."' ";
            mysqli_query($koneksi,$delete_query);

            $saldo=10000;

            //UPDATE DATA
            $email = $_SESSION['email'];
            $update_query = "UPDATE users SET saldo='".$saldo."' WHERE users.email='".$email."' ";
            mysqli_query($koneksi,$update_query);

            echo "<script>window.location='profil.php'</script>";
        }else{
            echo "<div class='container'>KODE YANG ANDA MASUKAN SALAH</div>";
        }   
    }

}   

?>