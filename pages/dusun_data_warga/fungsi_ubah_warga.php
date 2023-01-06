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

$id_warga = htmlspecialchars($_POST['id_warga']);

$id_user = $_SESSION['user']['id_user'];

// update database
$query = "UPDATE warga SET 
nama_lengkap = '$nama_lengkap', 
nik = '$nik', 
id_jenis_kelamin = '$id_jenis_kelamin',  
tempat_lahir = '$tempat_lahir', 
tanggal_lahir = '$tanggal_lahir', 
id_agama = '$id_agama', 
id_pendidikan = '$id_pendidikan',
id_pekerjaan = '$id_pekerjaan',
id_golongan_darah = '$id_golongan_darah',
id_status_pernikahan = '$id_status_pernikahan',
id_status_keluarga = '$id_status_keluarga',
id_kewarganegaraan = '$id_kewarganegaraan',
no_paspor = '$no_paspor',
no_kitas_kitap = '$no_kitas_kitap',
nama_ayah = '$nama_ayah',
nama_ibu = '$nama_ibu',
alamat = '$alamat',
id_rt_rw = '$id_rt_rw',
id_dusun = '$id_dusun',
desa = '$desa',
kecamatan = '$kecamatan',
kabupaten = '$kabupaten',
kode_pos = '$kode_pos',
provinsi = '$provinsi',
status_warga = '$status_warga'

WHERE warga.id_warga = $id_warga;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data warga berhasil'); window.location.href='../dashboard'</script>";
} else {
  echo "<script>window.alert('Ubah data warga gagal!'); window.location.href='../dusun_data_warga/ubah_warga.php'</script>";
}
