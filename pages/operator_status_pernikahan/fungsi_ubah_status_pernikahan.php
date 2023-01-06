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

$id_status_pernikahan = htmlspecialchars($_POST['id_status_pernikahan']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE status_pernikahan SET nama_status_pernikahan = '$nama_status_pernikahan' WHERE status_pernikahan.id_status_pernikahan = $id_status_pernikahan;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Status Pernikahan berhasil'); window.location.href='../operator_status_pernikahan'</script>";
} else {
  echo "<script>window.alert('Ubah Status Pernikahan gagal!'); window.location.href='../operator_status_pernikahan'</script>";
}
