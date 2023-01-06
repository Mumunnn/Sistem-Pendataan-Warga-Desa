<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_dusun = htmlspecialchars($_POST['nama_dusun']);
$alamat_dusun = htmlspecialchars($_POST['alamat_dusun']);
$kepala_dusun = htmlspecialchars($_POST['kepala_dusun']);
$sekre_dusun = htmlspecialchars($_POST['sekre_dusun']);
$bendahara_dusun = htmlspecialchars($_POST['bendahara_dusun']);
$no_hp_dusun = htmlspecialchars($_POST['no_hp_dusun']);

$id_dusun = htmlspecialchars($_POST['id_dusun']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE dusun SET nama_dusun = '$nama_dusun', alamat_dusun = '$alamat_dusun', kepala_dusun = '$kepala_dusun', sekre_dusun = '$sekre_dusun', bendahara_dusun = '$bendahara_dusun', no_hp_dusun = '$no_hp_dusun' WHERE dusun.id_dusun = $id_dusun;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data Dusun berhasil'); window.location.href='../operator_dusun'</script>";
} else {
  echo "<script>window.alert('Ubah data Dusun gagal!'); window.location.href='../operator_dusun'</script>";
}
