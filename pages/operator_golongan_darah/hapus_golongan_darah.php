<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_golongan_darah = htmlspecialchars($_GET['id_golongan_darah']);

// delete database
$query = "DELETE FROM golongan_darah WHERE id_golongan_darah = $id_golongan_darah";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Golongan Darah berhasil dihapus'); window.location.href='../operator_golongan_darah'</script>";
} else {
  echo "<script>window.alert('Data Golongan Darah gagal dihapus!'); window.location.href='../operator_golongan_darah'</script>";
}
