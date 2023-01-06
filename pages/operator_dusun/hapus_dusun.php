<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_dusun = htmlspecialchars($_GET['id_dusun']);

// delete database
$query = "DELETE FROM dusun WHERE id_dusun = $id_dusun";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Dusun berhasil dihapus'); window.location.href='../operator_dusun'</script>";
} else {
  echo "<script>window.alert('Data Dusun gagal dihapus!'); window.location.href='../operator_dusun'</script>";
}
