<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_dusun = htmlspecialchars($_POST['id_dusun']);
$desa = htmlspecialchars($_POST['desa']);
$data_jumlah_kk = htmlspecialchars($_POST['data_jumlah_kk']);

$id_jumlah_kk = htmlspecialchars($_POST['id_jumlah_kk']);

$id_user = $_SESSION['user']['id_user'];

$status = "Belum Dikonfirmasi";
// update database
$query = "UPDATE jumlah_kk SET 
id_dusun = '$id_dusun',
desa = '$desa',
data_jumlah_kk = '$data_jumlah_kk',
status = '$status'

WHERE jumlah_kk.id_jumlah_kk = $id_jumlah_kk;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data Jumlah KK berhasil'); window.location.href='../dusun_jumlah_kk'</script>";
} else {
  echo "<script>window.alert('Ubah data Jumlah KK gagal!'); window.location.href='../dusun_jumlah_kk/ubah_jumlah_kk.php'</script>";
}
