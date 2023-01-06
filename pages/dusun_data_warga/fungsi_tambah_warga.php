<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
$nik = htmlspecialchars($_POST['nik']);
$id_jenis_kelamin = htmlspecialchars($_POST['id_jenis_kelamin']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$id_agama = htmlspecialchars($_POST['id_agama']);
$id_pendidikan = htmlspecialchars($_POST['id_pendidikan']);
$id_pekerjaan = htmlspecialchars($_POST['id_pekerjaan']);
$id_golongan_darah = htmlspecialchars($_POST['id_golongan_darah']);
$id_status_pernikahan = htmlspecialchars($_POST['id_status_pernikahan']);
$id_status_keluarga = htmlspecialchars($_POST['id_status_keluarga']);
$id_kewarganegaraan = htmlspecialchars($_POST['id_jenis_kelamin']);
$no_paspor = htmlspecialchars($_POST['no_paspor']);
$no_kitas_kitap = htmlspecialchars($_POST['no_kitas_kitap']);
$nama_ayah = htmlspecialchars($_POST['nama_ayah']);
$nama_ibu = htmlspecialchars($_POST['nama_ibu']);
$alamat = htmlspecialchars($_POST['alamat']);
$id_rt_rw = htmlspecialchars($_POST['id_rt_rw']);
$id_dusun = htmlspecialchars($_POST['id_dusun']);
$desa = htmlspecialchars($_POST['desa']);
$kecamatan = htmlspecialchars($_POST['kecamatan']);
$kabupaten = htmlspecialchars($_POST['kabupaten']);
$kode_pos = htmlspecialchars($_POST['kode_pos']);
$provinsi = htmlspecialchars($_POST['provinsi']);
$status_warga = htmlspecialchars($_POST['status_warga']);

// masukkan ke database

$query = "INSERT INTO warga (id_warga, nama_lengkap, nik, id_jenis_kelamin, tempat_lahir, tanggal_lahir, id_agama, id_pendidikan, id_pekerjaan, id_golongan_darah, id_status_pernikahan, id_status_keluarga, id_kewarganegaraan, no_paspor, no_kitas_kitap, nama_ayah, nama_ibu, alamat, id_rt_rw, id_dusun, desa, kecamatan, kabupaten, kode_pos, provinsi, status_warga) 
VALUES (NULL, '$nama_lengkap', '$nik', '$id_jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$id_agama', '$id_pendidikan', '$id_pekerjaan', '$id_golongan_darah', '$id_status_pernikahan', '$id_status_keluarga', '$id_kewarganegaraan', '$no_paspor', '$no_kitas_kitap', '$nama_ayah', '$nama_ibu', '$alamat', '$id_rt_rw', '$id_dusun', '$desa', '$kecamatan', '$kabupaten', '$kode_pos', '$provinsi', '$status_warga');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Warga berhasil'); window.location.href='../dashboard'</script>";
} else {
  echo "<script>window.alert('Tambah Warga gagal!'); window.location.href='../dusun_data_warga/tambah_warga.php'</script>";
}
