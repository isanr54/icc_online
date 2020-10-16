<?php
  include '../../../conn/koneksi.php';

  $id=$_GET['id'];
  $query="DELETE FROM user WHERE id=".$id;

  if(mysqli_query($koneksi,$query)){
    echo "<script>window.location = '../datauser.php';</script>";
  }else{
    echo "Data Gagal Dihapus";
  }

?>