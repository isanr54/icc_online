<?php
include '../conn/koneksi.php';
@session_start();
if(empty($_SESSION['email'])){
  echo "<script>window.location='../index.php'</script>";
}else{
  $nominal = $_POST['nominal'];
  $sql=$koneksi->query("SELECT * FROM users WHERE email='".$_SESSION['email']."' ");
  $data=$sql->fetch_assoc();
  $saldo= $data['saldo'];
  $email=$data['email'];
    if($saldo>$nominal){
    $no_hp = $_POST['no_hp'];
    $provider = $_POST['provider'];
    $username   = "081395563858";
    $apiKey   = "1845da6743e11e76184";
    $ref_id  = uniqid('');
    $code = $provider.$nominal;
    $signature  = md5($username.$apiKey.$ref_id);

    $json = '{
              "commands"    : "topup",
              "username"    : "081395563858",
              "ref_id"      : "'.$ref_id.'",
              "hp"          : "'.$no_hp.'",
              "pulsa_code"  : "'.$code.'",
              "sign"        : "'.$signature.'"
            }';

    $url = "https://api.mobilepulsa.net/v1/legacy/index";

    $ch  = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);
    curl_close($ch);
            
    //Database Area
    $kode_produk = $koneksi->query("SELECT * FROM kode_pulsa WHERE kode_produk='".$provider."' AND nominal='".$nominal."' ");
    $data_kp = $kode_produk->fetch_assoc();
    $kode_produk=$data_kp['kode_produk'];
    $harga_produk=$data_kp['harga'];

    //Math Area 
    $untung=$harga_produk-$data_kp['harga_beli'];
    $date=date('Y-m-d');
    $harga_pulsa=$harga_produk;
    $saldo_baru=$saldo-$harga_pulsa;
    
    //CRUD Area
    $insert_transaksi = "INSERT INTO transaksi VALUES('".$date."','".$no_hp."','".$email."','".$kode_produk."','".$harga_produk."','".$untung."')";
    mysqli_query($koneksi,$insert_transaksi);

    $update_saldo = "UPDATE users SET saldo='".$saldo_baru."' WHERE email='".$email."'" ;
    mysqli_query($koneksi,$update_saldo);

   echo "<script>window.location='transaksi_sukses.php'</script>";
  }else{
    echo "<script>window.location='saldo_habis.php'</script>";
  }
}
?>