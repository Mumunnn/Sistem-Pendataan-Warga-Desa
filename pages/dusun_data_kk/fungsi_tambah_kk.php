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


// masukkan ke database
$query = "INSERT INTO kartu_keluarga (id_kk, no_kk, id_kepala_keluarga, alamat, id_rt_rw, id_dusun, desa, kecamatan, kabupaten, kode_pos, provinsi) 
VALUES (NULL, '$no_kk', '$id_kepala_keluarga', '$alamat', '$id_rt_rw', '$id_dusun', '$desa', '$kecamatan', '$kabupaten', '$kode_pos', '$provinsi');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Kartu Keluarga berhasil'); window.location.href='../dusun_data_kk'</script>";
} else {
  echo "<script>window.alert('Tambah Kartu keluarga gagal!'); window.location.href='../dusun_data_kk/tambah_kk.php'</script>";
}
