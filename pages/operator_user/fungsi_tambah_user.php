<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_user = htmlspecialchars($_POST['nama_user']);
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));
$jabatan_user = htmlspecialchars($_POST['jabatan_user']);
$id_jenis_kelamin = htmlspecialchars($_POST['id_jenis_kelamin']);
$no_hp_user = htmlspecialchars($_POST['no_hp_user']);

// masukkan ke database

$query = "INSERT INTO user (id_user, nama_user, username_user, password_user, jabatan_user, id_jenis_kelamin, no_hp_user) VALUES (NULL, '$nama_user', '$username_user', '$password_user', '$jabatan_user', '$id_jenis_kelamin', '$no_hp_user');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah user berhasil'); window.location.href='../operator_user'</script>";
} else {
  echo "<script>window.alert('Tambah user gagal!'); window.location.href='../operator_user/tambah_user.php'</script>";
}
