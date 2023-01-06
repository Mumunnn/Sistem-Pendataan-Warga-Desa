<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_kewarganegaraan = htmlspecialchars($_POST['nama_kewarganegaraan']);

// masukkan ke database

$query = "INSERT INTO kewarganegaraan (id_kewarganegaraan, nama_kewarganegaraan) VALUES (NULL, '$nama_kewarganegaraan');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Kewarganegaraan berhasil'); window.location.href='../operator_kewarganegaraan'</script>";
} else {
  echo "<script>window.alert('Tambah Kewarganegaraan gagal!'); window.location.href='../operator_kewarganegaraan/tambah_kewarganegaraan.php'</script>";
}
