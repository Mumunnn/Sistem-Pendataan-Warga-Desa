<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['id_warga'];

// ambil dari database
$query = "SELECT * FROM warga
LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin
LEFT JOIN agama ON warga.id_agama = agama.id_agama
LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan
LEFT JOIN golongan_darah ON warga.id_golongan_darah = golongan_darah.id_golongan_darah
LEFT JOIN status_pernikahan ON warga.id_status_pernikahan = status_pernikahan.id_status_pernikahan
LEFT JOIN status_keluarga ON warga.id_status_keluarga = status_keluarga.id_status_keluarga
LEFT JOIN kewarganegaraan ON warga.id_kewarganegaraan = kewarganegaraan.id_kewarganegaraan
LEFT JOIN rt_rw ON warga.id_rt_rw = rt_rw.id_rt_rw
LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun
WHERE id_warga = $get_id_warga";

$hasil = mysqli_query($db, $query);

$data = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data[] = $row;
}

// data referensi, ambil dari tabel jenis kelamin
$query_jk = "SELECT * FROM jenis_kelamin";
$hasil_jk = mysqli_query($db, $query_jk);

$data_jk = array();

while ($row_jk = mysqli_fetch_assoc($hasil_jk)) {
  $data_jk[] = $row_jk;
}

// data referensi, ambil dari tabel agama
$query_agama = "SELECT * FROM agama";
$hasil_agama = mysqli_query($db, $query_agama);

$data_agama = array();

while ($row_agama = mysqli_fetch_assoc($hasil_agama)) {
  $data_agama[] = $row_agama;
}

// data referensi, ambil dari tabel pendidikan
$query_pendidikan = "SELECT * FROM pendidikan";
$hasil_pendidikan = mysqli_query($db, $query_pendidikan);

$data_pendidikan = array();

while ($row_pendidikan = mysqli_fetch_assoc($hasil_pendidikan)) {
  $data_pendidikan[] = $row_pendidikan;
}

// data referensi, ambil dari tabel pekerjaan
$query_pekerjaan = "SELECT * FROM pekerjaan";
$hasil_pekerjaan = mysqli_query($db, $query_pekerjaan);

$data_pekerjaan = array();

while ($row_pekerjaan = mysqli_fetch_assoc($hasil_pekerjaan)) {
  $data_pekerjaan[] = $row_pekerjaan;
}

// data referensi, ambil dari tabel golongan_darah
$query_gd = "SELECT * FROM golongan_darah";
$hasil_gd = mysqli_query($db, $query_gd);

$data_gd = array();

while ($row_gd = mysqli_fetch_assoc($hasil_gd)) {
  $data_gd[] = $row_gd;
}

// data referensi, ambil dari tabel status_pernikahan
$query_sp = "SELECT * FROM status_pernikahan";
$hasil_sp = mysqli_query($db, $query_sp);

$data_sp = array();

while ($row_sp = mysqli_fetch_assoc($hasil_sp)) {
  $data_sp[] = $row_sp;
}

// data referensi, ambil dari tabel status_keluarga
$query_sk = "SELECT * FROM status_keluarga";
$hasil_sk = mysqli_query($db, $query_sk);

$data_sk = array();

while ($row_sk = mysqli_fetch_assoc($hasil_sk)) {
  $data_sk[] = $row_sk;
}

// data referensi, ambil dari tabel kewarganegaraan
$query_kewarganegaraan = "SELECT * FROM kewarganegaraan";
$hasil_kewarganegaraan = mysqli_query($db, $query_kewarganegaraan);

$data_kewarganegaraan = array();

while ($row_kewarganegaraan = mysqli_fetch_assoc($hasil_kewarganegaraan)) {
  $data_kewarganegaraan[] = $row_kewarganegaraan;
}

// data referensi, ambil dari tabel rt_rw
$query_rt = "SELECT * FROM rt_rw";
$hasil_rt = mysqli_query($db, $query_rt);

$data_rt = array();

while ($row_rt = mysqli_fetch_assoc($hasil_rt)) {
  $data_rt[] = $row_rt;
}

// data referensi, ambil dari tabel dusun
$query_dusun = "SELECT * FROM dusun";
$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}

