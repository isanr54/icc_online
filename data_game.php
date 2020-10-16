<?php

include 'conn/koneksi.php';

if(isset($_POST['get_option']))
{
 $state = $_POST['get_option'];
 $find=$koneksi->query("SELECT * FROM kode_game WHERE kode_produk='".$state."' ORDER BY length(nominal)");
 while($row=$find->fetch_assoc())
 {
  echo "<option value='".$row['nominal']."'>".$row['nominal_produk']." (Rp. ".number_format($row['harga'],0,'.','.').")</option>";
 }
 exit;
}
?>