<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_status_pernikahan = htmlspecialchars($_POST['nama_status_pernikahan']);

// masukkan ke database

$query = "INSERT INTO status_pernikahan (id_status_pernikahan, nama_status_pernikahan) VALUES (NULL, '$nama_status_pernikahan');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Status Pernikahan berhasil'); window.location.href='../operator_status_pernikahan'</script>";
} else {
  echo "<script>window.alert('Tambah Status Pernikahan gagal!'); window.location.href='../operator_status_pernikahan/tambah_status_pernikahan.php'</script>";
}
