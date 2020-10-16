<?php
  include '../../../conn/koneksi.php';

  $id=$_GET['id'];
  $query="DELETE FROM transaksi_admin WHERE id_transaksi=".$id;

  if(mysqli_query($koneksi,$query)){
    echo "<script>window.location = '../transaksiadmin.php';</script>";
  }else{
    echo "Data Gagal Dihapus";
  }

?>