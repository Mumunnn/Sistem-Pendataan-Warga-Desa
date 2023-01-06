<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_dusun = htmlspecialchars($_POST['id_dusun']);
$desa = htmlspecialchars($_POST['desa']);
$data_jumlah_kk = htmlspecialchars($_POST['data_jumlah_kk']);
$status = "Belum Dikonfirmasi";

// masukkan ke database

$query = "INSERT INTO jumlah_kk (id_jumlah_kk, id_dusun, desa, data_jumlah_kk, status) 
VALUES (NULL, '$id_dusun', '$desa', '$data_jumlah_kk', '$status');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Jumlah KK berhasil'); window.location.href='../dusun_jumlah_kk'</script>";
} else {
  echo "<script>window.alert('Tambah Jumlah KK gagal!'); window.location.href='../dusun_jumlah_kk/tambah_jumlah_kk.php'</script>";
}
