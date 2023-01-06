<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_kk = htmlspecialchars($_GET['id_kk']);

// delete database
$query = "DELETE FROM kartu_keluarga WHERE id_kk = $id_kk";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data KK berhasil dihapus'); window.location.href='../dusun_data_kk'</script>";
} else {
  echo "<script>window.alert('Data KK gagal dihapus!'); window.location.href='../dusun_data_kk'</script>";
}
