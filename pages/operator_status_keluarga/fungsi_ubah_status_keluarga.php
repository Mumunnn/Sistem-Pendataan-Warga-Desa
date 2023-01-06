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

$id_status_keluarga = htmlspecialchars($_POST['id_status_keluarga']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE status_keluarga SET nama_status_keluarga = '$nama_status_keluarga' WHERE status_keluarga.id_status_keluarga = $id_status_keluarga;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Status Keluarga berhasil'); window.location.href='../operator_status_keluarga'</script>";
} else {
  echo "<script>window.alert('Ubah Status Keluarga gagal!'); window.location.href='../operator_status_keluarga'</script>";
}
