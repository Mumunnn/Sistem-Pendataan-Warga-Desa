<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_rt_rw = htmlspecialchars($_GET['id_rt_rw']);

// delete database
$query = "DELETE FROM rt_rw WHERE id_rt_rw = $id_rt_rw";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data RT/RW berhasil dihapus'); window.location.href='../operator_rt_rw'</script>";
} else {
  echo "<script>window.alert('Data RT/RW gagal dihapus!'); window.location.href='../operator_rt_rw'</script>";
}
