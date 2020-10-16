<?php
    include '../../conn/koneksi.php';
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
    <link href="../../assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/helper.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
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
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
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
                        <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="datauser.php"><i class="fa fa-users"></i>Data Users</a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><span class="hide-menu"><i class="fa fa-folder"></i>Data Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="transaksiuser.php">Data Transaksi Users</a></li>
                                <li><a href="transaksiadmin.php">Data Transaksi Admin</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Pengelola Produk<span class="label label-rouded label-warning pull-right">8</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="daftar_harga.php">Daftar Harga</a></li>
                            </ul>
                        </li><li> <a class="has-arrow  " href="penjualan.html" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Penjualan<span class="label label-rouded label-success pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="penjualan.php">Arus Kas</a></li>
                            </ul>
                        </li>
        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
        <?php
        $username   = "081395563858";
        $apiKey   = "5115d9328c5b3a9b";
        $signature  = md5($username.$apiKey.'pl');

        $json = '{
                "commands" : "pricelist",
                "username" : "081395563858",
                "sign"     : "69af107d1bc8d77e74712d186a6409e5"
                }';

        $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $datas = curl_exec($ch);
        curl_close($ch);


        $besek = json_decode($datas, true);
        
        
        ?>
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Produk</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga Jual</th>
                                                <th>Kategori</th>
                                                <th>Admin</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for($i=0;$i<=500;$i++){
                                            ?>
                                            <tr>
                                                <td><?=$besek['data'][$i]['pulsa_code'];?></td>
                                                <td><?=$besek['data'][$i]['pulsa_op'];?>&nbsp<?=$besek['data'][$i]['pulsa_nominal'];?></td>
                                                <td><?=$besek['data'][$i]['pulsa_price'];?></td>
                                                <td><?=$besek['data'][$i]['pulsa_type'];?></td>
                                                <td>Risma Septiani</td>
                                                <td><a herf=""><button type="button" class="btn btn-warning">Edit</i></a></button> | <a herf=""></i><button type="button" class="btn btn-warning">Hapus</a></button></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            <!-- End Container fluid  -->
        
        <!-- End Page wrapper  -->
 <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../../assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../assets/js/custom.min.js"></script>

    <script src="../../assets/js/lib/datatables/datatables.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="../../assets/js/lib/datatables/datatables-init.js"></script>
</body>

</html>
<?php
    }else{
        echo "<script>window.location='../login.php'</script>";
    }
?>