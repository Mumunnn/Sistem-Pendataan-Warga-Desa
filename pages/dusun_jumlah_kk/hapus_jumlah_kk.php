<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_jumlah_kk = htmlspecialchars($_GET['id_jumlah_kk']);

// delete database
$query = "DELETE FROM jumlah_kk WHERE id_jumlah_kk = $id_jumlah_kk";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Data Jumlah KK berhasil dihapus'); window.location.href='../dusun_jumlah_kk'</script>";
} else {
  echo "<script>window.alert('Data Jumlah KK gagal dihapus!'); window.location.href='../dusun_jumlah_kk'</script>";
}
