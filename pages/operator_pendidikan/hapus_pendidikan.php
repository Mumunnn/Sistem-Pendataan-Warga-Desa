<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_pendidikan = htmlspecialchars($_GET['id_pendidikan']);

// delete database
$query = "DELETE FROM pendidikan WHERE id_pendidikan = $id_pendidikan";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Pendidikan berhasil dihapus'); window.location.href='../operator_pendidikan'</script>";
} else {
  echo "<script>window.alert('Data Pendidikan gagal dihapus!'); window.location.href='../operator_pendidikan'</script>";
}
