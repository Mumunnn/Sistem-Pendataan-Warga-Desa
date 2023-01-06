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

$id_pendidikan = htmlspecialchars($_POST['id_pendidikan']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE pendidikan SET nama_pendidikan = '$nama_pendidikan' WHERE pendidikan.id_pendidikan = $id_pendidikan;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Pendidikan berhasil'); window.location.href='../operator_pendidikan'</script>";
} else {
  echo "<script>window.alert('Ubah Pendidikan gagal!'); window.location.href='../operator_pendidikan'</script>";
}
