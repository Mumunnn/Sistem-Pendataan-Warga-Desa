<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$status = htmlspecialchars($_POST['status']);

$id_jumlah_kk = htmlspecialchars($_POST['id_jumlah_kk']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE jumlah_kk SET 
status = '$status'

WHERE jumlah_kk.id_jumlah_kk = $id_jumlah_kk;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah Status KK berhasil'); window.location.href='../sekpem_kuantitas_kk'</script>";
} else {
  echo "<script>window.alert('Ubah Status KK gagal!'); window.location.href='../sekpem_kuantitas_kk/ubah_status.php'</script>";
}
