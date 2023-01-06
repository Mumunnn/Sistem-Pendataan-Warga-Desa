<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_agama = htmlspecialchars($_GET['id_agama']);

// delete database
$query = "DELETE FROM agama WHERE id_agama = $id_agama";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Agama berhasil dihapus'); window.location.href='../operator_agama'</script>";
} else {
  echo "<script>window.alert('Data Agama gagal dihapus!'); window.location.href='../operator_agama'</script>";
}
