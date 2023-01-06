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

$id_pekerjaan = htmlspecialchars($_POST['id_pekerjaan']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE pekerjaan SET nama_pekerjaan = '$nama_pekerjaan' WHERE pekerjaan.id_pekerjaan = $id_pekerjaan;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Pekerjaan berhasil'); window.location.href='../operator_pekerjaan'</script>";
} else {
  echo "<script>window.alert('Ubah Pekerjaan gagal!'); window.location.href='../operator_pekerjaan'</script>";
}
