<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['id_warga']);

// delete database
$query = "DELETE FROM warga WHERE id_warga = $id_warga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Warga berhasil dihapus'); window.location.href='../dashboard'</script>";
} else {
  echo "<script>window.alert('Data Warga gagal dihapus!'); window.location.href='../dashboard'</script>";
}
