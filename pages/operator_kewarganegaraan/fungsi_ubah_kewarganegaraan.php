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

$id_kewarganegaraan = htmlspecialchars($_POST['id_kewarganegaraan']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE kewarganegaraan SET nama_kewarganegaraan = '$nama_kewarganegaraan' WHERE kewarganegaraan.id_kewarganegaraan = $id_kewarganegaraan;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Kewarganegaraan berhasil'); window.location.href='../operator_kewarganegaraan'</script>";
} else {
  echo "<script>window.alert('Ubah Kewarganegaraan gagal!'); window.location.href='../operator_kewarganegaraan'</script>";
}
