<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_pendidikan = htmlspecialchars($_POST['nama_pendidikan']);

// masukkan ke database

$query = "INSERT INTO pendidikan (id_pendidikan, nama_pendidikan) VALUES (NULL, '$nama_pendidikan');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Pendidikan berhasil'); window.location.href='../operator_pendidikan'</script>";
} else {
  echo "<script>window.alert('Tambah Pendidikan gagal!'); window.location.href='../operator_pendidikan/tambah_pendidikan.php'</script>";
}
