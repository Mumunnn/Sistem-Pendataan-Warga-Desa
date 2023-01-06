<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$no_kk = htmlspecialchars($_POST['no_kk']);
$id_kepala_keluarga = htmlspecialchars($_POST['id_kepala_keluarga']);
$alamat = htmlspecialchars($_POST['alamat']);
$id_rt_rw = htmlspecialchars($_POST['id_rt_rw']);
$id_dusun = htmlspecialchars($_POST['id_dusun']);
$desa = htmlspecialchars($_POST['desa']);
$kecamatan = htmlspecialchars($_POST['kecamatan']);
$kabupaten = htmlspecialchars($_POST['kabupaten']);
$kode_pos = htmlspecialchars($_POST['kode_pos']);
$provinsi = htmlspecialchars($_POST['provinsi']);

$id_kk = htmlspecialchars($_POST['id_kk']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE kartu_keluarga SET 
no_kk = '$no_kk', 
id_kepala_keluarga = '$id_kepala_keluarga',  
alamat = '$alamat',
id_rt_rw = '$id_rt_rw', 
id_dusun = '$id_dusun',
desa = '$desa',
kecamatan = '$kecamatan',
kabupaten = '$kabupaten',
kode_pos = '$kode_pos',
provinsi = '$provinsi'

WHERE kartu_keluarga.id_kk = $id_kk;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data KK berhasil'); window.location.href='../dusun_data_kk'</script>";
} else {
  echo "<script>window.alert('Ubah data KK gagal!'); window.location.href='../dusun_data_kk/ubah_kk.php'</script>";
}
