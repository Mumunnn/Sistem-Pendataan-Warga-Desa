<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_pekerjaan = htmlspecialchars($_POST['nama_pekerjaan']);

// masukkan ke database

$query = "INSERT INTO pekerjaan (id_pekerjaan, nama_pekerjaan) VALUES (NULL, '$nama_pekerjaan');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Pekerjaan berhasil'); window.location.href='../operator_pekerjaan'</script>";
} else {
  echo "<script>window.alert('Tambah Pekerjaan gagal!'); window.location.href='../operator_pekerjaan/tambah_pekerjaan.php'</script>";
}
