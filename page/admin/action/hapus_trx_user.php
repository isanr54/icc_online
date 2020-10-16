<?php
  include '../../../conn/koneksi.php';

  $id=$_GET['id'];
  $query="DELETE FROM transaksi_user WHERE id_transaksi=".$id;

  if(mysqli_query($koneksi,$query)){
    echo "<script>window.location = '../transaksiuser.php';</script>";
  }else{
    echo "Data Gagal Dihapus";
  }

?>