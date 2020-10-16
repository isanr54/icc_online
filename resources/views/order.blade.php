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
                      <li><a href="index.php">Beranda</a></li>
                      <li><a href="order.php">Order</a></li>
                      <li><a href="modal">Ikhsan Rasidin</a></li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>

    <!-- Table -->
    <div class="container ">
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
              <tr>
                <td>13-09-2019 01:00:12</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Eclair</td>
                <td>
                    <span class="new badge yellow" data-badge-caption="proses"></span>
                </td>
              </tr>
              <tr>
                <td>13-09-2019 01:00:12</td>
                <td>Jellybean</td>
                <td>$3.76</td>
                <td>Eclair</td>
                <td>
                    <span class="new badge green" data-badge-caption="sukses"></span>
                </td>
              </tr>
            </tbody>
          </table>    
    </div>
</body>
</html>
