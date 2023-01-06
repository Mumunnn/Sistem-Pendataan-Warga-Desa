<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_rt_rw = htmlspecialchars($_POST['nama_rt_rw']);
$id_dusun = htmlspecialchars($_POST['id_dusun']);
$alamat_rt_rw = htmlspecialchars($_POST['alamat_rt_rw']);
$ketua_rt_rw = htmlspecialchars($_POST['ketua_rt_rw']);
$sekre_rt_rw = htmlspecialchars($_POST['sekre_rt_rw']);
$bendahara_rt_rw = htmlspecialchars($_POST['bendahara_rt_rw']);
$no_hp_rt_rw = htmlspecialchars($_POST['no_hp_rt_rw']);



// masukkan ke database

$query = "INSERT INTO rt_rw (id_rt_rw, nama_rt_rw, id_dusun, alamat_rt_rw, ketua_rt_rw, sekre_rt_rw, bendahara_rt_rw, no_hp_rt_rw) VALUES (NULL, '$nama_rt_rw', '$id_dusun', '$alamat_rt_rw', '$ketua_rt_rw', '$sekre_rt_rw', '$bendahara_rt_rw', '$no_hp_rt_rw');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah RT/RW berhasil'); window.location.href='../operator_rt_rw'</script>";
} else {
  echo "<script>window.alert('Tambah RT/RW gagal!'); window.location.href='../operator_rt_rw/tambah_rt.php'</script>";
}
