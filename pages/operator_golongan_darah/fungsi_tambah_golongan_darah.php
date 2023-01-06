<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_golongan_darah = htmlspecialchars($_POST['nama_golongan_darah']);

// masukkan ke database

$query = "INSERT INTO golongan_darah (id_golongan_darah, nama_golongan_darah) VALUES (NULL, '$nama_golongan_darah');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Golongan Darah berhasil'); window.location.href='../operator_golongan_darah'</script>";
} else {
  echo "<script>window.alert('Tambah Golongan Darah gagal!'); window.location.href='../operator_golongan_darah/tambah_golongan_darah.php'</script>";
}
