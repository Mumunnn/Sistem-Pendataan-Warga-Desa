<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_status_pernikahan = htmlspecialchars($_GET['id_status_pernikahan']);

// delete database
$query = "DELETE FROM status_pernikahan WHERE id_status_pernikahan = $id_status_pernikahan";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Status Pernikahan berhasil dihapus'); window.location.href='../operator_status_pernikahan'</script>";
} else {
  echo "<script>window.alert('Data Status pernikahan gagal dihapus!'); window.location.href='../operator_status_pernikahan'</script>";
}
