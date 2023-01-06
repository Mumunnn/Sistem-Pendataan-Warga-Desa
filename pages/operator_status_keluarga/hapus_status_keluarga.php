<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_status_keluarga = htmlspecialchars($_GET['id_status_keluarga']);

// delete database
$query = "DELETE FROM status_keluarga WHERE id_status_keluarga = $id_status_keluarga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Status Keluarga berhasil dihapus'); window.location.href='../operator_status_keluarga'</script>";
} else {
  echo "<script>window.alert('Data Status Keluarga gagal dihapus!'); window.location.href='../operator_status_keluarga'</script>";
}
