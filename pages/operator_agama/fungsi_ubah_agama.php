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

$id_agama = htmlspecialchars($_POST['id_agama']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE agama SET nama_agama = '$nama_agama' WHERE agama.id_agama = $id_agama;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Agama berhasil'); window.location.href='../operator_agama'</script>";
} else {
  echo "<script>window.alert('Ubah Agama gagal!'); window.location.href='../operator_agama'</script>";
}
