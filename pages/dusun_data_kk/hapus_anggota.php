<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['id_warga']);
$id_kk = htmlspecialchars($_GET['id_kk']);

// delete database
$query = "DELETE FROM warga_has_kartu_keluarga WHERE id_warga = $id_warga AND id_kk = $id_kk";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../dusun_data_kk/ubah_anggota.php?id_kk=$id_kk'</script>";
} else {
  echo "<script>window.alert('Data anggota gagal dihapus!'); window.location.href='../dusun_data_kk/ubah_anggota.php?id_kk=$id_kk'</script>";
}
