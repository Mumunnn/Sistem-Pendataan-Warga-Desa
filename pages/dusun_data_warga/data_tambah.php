<?php
include('../../config/koneksi.php');

// ambil dari database jenis_kelamin
$query_jk = "SELECT * FROM jenis_kelamin";

$hasil_jk = mysqli_query($db, $query_jk);

$data_jk = array();

while ($row_jk = mysqli_fetch_assoc($hasil_jk)) {
  $data_jk[] = $row_jk;
}

// ambil dari database agama
$query_agama = "SELECT * FROM agama";

$hasil_agama = mysqli_query($db, $query_agama);

$data_agama = array();

while ($row_agama = mysqli_fetch_assoc($hasil_agama)) {
  $data_agama[] = $row_agama;
}

// ambil dari database pendidikan
$query_pendidikan = "SELECT * FROM pendidikan";

$hasil_pendidikan = mysqli_query($db, $query_pendidikan);

$data_pendidikan = array();

while ($row_pendidikan = mysqli_fetch_assoc($hasil_pendidikan)) {
  $data_pendidikan[] = $row_pendidikan;
}

// ambil dari database pekerjaan
$query_pekerjaan = "SELECT * FROM pekerjaan";

$hasil_pekerjaan = mysqli_query($db, $query_pekerjaan);

$data_pekerjaan = array();

while ($row_pekerjaan = mysqli_fetch_assoc($hasil_pekerjaan)) {
  $data_pekerjaan[] = $row_pekerjaan;
}

// ambil dari database golongan_darah
$query_gd = "SELECT * FROM golongan_darah";

$hasil_gd = mysqli_query($db, $query_gd);

$data_gd = array();

while ($row_gd = mysqli_fetch_assoc($hasil_gd)) {
  $data_gd[] = $row_gd;
}

// ambil dari database status_pernikahan
$query_sp = "SELECT * FROM status_pernikahan";

$hasil_sp = mysqli_query($db, $query_sp);

$data_sp = array();

while ($row_sp = mysqli_fetch_assoc($hasil_sp)) {
  $data_sp[] = $row_sp;
}

// ambil dari database status_keluarga
$query_sk = "SELECT * FROM status_keluarga";

$hasil_sk = mysqli_query($db, $query_sk);

$data_sk = array();

while ($row_sk = mysqli_fetch_assoc($hasil_sk)) {
  $data_sk[] = $row_sk;
}

// ambil dari database kewarganegaraan
$query_kewarganegaraan = "SELECT * FROM kewarganegaraan";

$hasil_kewarganegaraan = mysqli_query($db, $query_kewarganegaraan);

$data_kewarganegaraan = array();

while ($row_kewarganegaraan = mysqli_fetch_assoc($hasil_kewarganegaraan)) {
  $data_kewarganegaraan[] = $row_kewarganegaraan;
}

// ambil dari database rt
$query_rt = "SELECT * FROM rt_rw";

$hasil_rt = mysqli_query($db, $query_rt);

$data_rt = array();

while ($row_rt = mysqli_fetch_assoc($hasil_rt)) {
  $data_rt[] = $row_rt;
}

// ambil dari database dusun
$query_dusun = "SELECT * FROM dusun";

$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}

