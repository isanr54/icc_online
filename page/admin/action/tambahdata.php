<?php
    include '../../../conn/koneksi.php';
    session_start();
    if(empty($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ICC Online | Command Center</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../../assets/css/helper.css" rel="stylesheet">
    <link href="../../../assets/css/style.css" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
        <!-- header header  -->
          <div class="header">
              <nav class="navbar top-navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-header">ICC ONLINE</a>    
                    <!-- User profile -->
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a href="../index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="../datauser.php"><i class="fa fa-users"></i>Data Users</a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><span class="hide-menu"><i class="fa fa-folder"></i>Data Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../transaksiuser.php">Data Transaksi Users</a></li>
                                <li><a href="../transaksiadmin.php">Data Transaksi Admin</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Pengelola Produk<span class="label label-rouded label-warning pull-right">8</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="daftar_pulsa.php">Produk Pulsa</a></li>
                                <li><a href="daftar_pln.php">Produk PLN</a></li>
                                <li><a href="daftar_topup.php">Produk Top Up</a></li>
                            </ul>
                        </li><li> <a class="has-arrow  " href="penjualan.html" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Penjualan<span class="label label-rouded label-success pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../penjualan.php">Arus Kas</a></li>
                            </ul>
                        </li>
        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Data Transaksi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <form method="post">
                    <div class="form-group">
                      <label for="jenis_trx">Jenis Transaksi</label>
                      <input type="text" name="jenis_trx" id="jenis_trx" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="jumlah_produk">Jumlah Produk</label>
                      <input type="text" name="jumlah_produk" id="jumlah_produk" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Tambah" class="btn btn-warning">
                  </form>
                </div>
              </div>
            </div>
            <footer class="footer"> © 2019 ICC ONLINE All rights reserved</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
        </div>
            <!-- End Container fluid  -->
            <!-- footer -->
        <!-- End Page wrapper  -->
<!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../../../assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../../assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../../../assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../../assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../../assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../assets/js/custom.min.js"></script>


    <script src="../../../assets/js/lib/datatables/datatables.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="../../../assets/js/lib/datatables/datatables-init.js"></script>
</body>

</html>
<?php
    if(isset($_POST['submit'])){
        $jenis_trx = $_POST['jenis_trx'];
        $jumlah_produk = $_POST['jumlah_produk'];
        $tgl=date('Y-m-d');

        $insert = "INSERT INTO transaksi_admin VALUES('','".$jenis_trx."','".$jumlah_produk."','".$tgl."')";
        if(mysqli_query($koneksi,$insert)){
            echo "<script>window.location = '../transaksiadmin.php';</script>";
        }else{
            echo "Data Gagal Di Masukan";
        }
    }else{
        NULL;
    }
}else{
     echo "<script>window.location='../../login.php'</script>";
}
?>
?>