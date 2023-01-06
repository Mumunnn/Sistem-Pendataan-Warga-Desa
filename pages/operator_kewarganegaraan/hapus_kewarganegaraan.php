<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_kewarganegaraan = htmlspecialchars($_GET['id_kewarganegaraan']);

// delete database
$query = "DELETE FROM kewarganegaraan WHERE id_kewarganegaraan = $id_kewarganegaraan";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Kewarganegaraan berhasil dihapus'); window.location.href='../operator_kewarganegaraan'</script>";
} else {
  echo "<script>window.alert('Data Kewarganegaraan gagal dihapus!'); window.location.href='../operator_kewarganegaraan'</script>";
}
