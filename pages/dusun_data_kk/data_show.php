<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_kk = $_GET['id_kk'];

// ambil dari database
$query = "SELECT * FROM kartu_keluarga 
LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun

WHERE id_kk = $get_id_kk";

$hasil = mysqli_query($db, $query);

$data_kk = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kk[] = $row;
}

// ambil data anggota keluarga
$query_anggota = "SELECT * from warga 
LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin
LEFT JOIN status_keluarga ON warga.id_status_keluarga = status_keluarga.id_status_keluarga
INNER JOIN warga_has_kartu_keluarga
ON warga_has_kartu_keluarga.id_warga = warga.id_warga
WHERE warga_has_kartu_keluarga.id_kk = $get_id_kk";

$hasil_anggota = mysqli_query($db, $query_anggota);

$data_anggota = array();

while ($row_anggota = mysqli_fetch_assoc($hasil_anggota)) {
  $data_anggota[] = $row_anggota;
}

// data referensi, ambil dari tabel warga
$query_warga = "SELECT * FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
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


