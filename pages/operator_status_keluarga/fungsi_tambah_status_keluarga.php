<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_status_keluarga = htmlspecialchars($_POST['nama_status_keluarga']);

// masukkan ke database

$query = "INSERT INTO status_keluarga (id_status_keluarga, nama_status_keluarga) VALUES (NULL, '$nama_status_keluarga');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Status Keluarga berhasil'); window.location.href='../operator_status_keluarga'</script>";
} else {
  echo "<script>window.alert('Tambah Status Keluarga gagal!'); window.location.href='../operator_status_keluarga/tambah_status_keluarga.php'</script>";
}
