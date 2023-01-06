<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_agama = htmlspecialchars($_POST['nama_agama']);

// masukkan ke database

$query = "INSERT INTO agama (id_agama, nama_agama) VALUES (NULL, '$nama_agama');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Agama berhasil'); window.location.href='../operator_agama'</script>";
} else {
  echo "<script>window.alert('Tambah Agama gagal!'); window.location.href='../operator_agama/tambah_agama.php'</script>";
}
