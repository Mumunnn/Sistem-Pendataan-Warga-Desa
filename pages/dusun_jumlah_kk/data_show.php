<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_jumlah_kk = $_GET['id_jumlah_kk'];

// ambil dari database
$query = "SELECT * FROM jumlah_kk
LEFT JOIN dusun ON jumlah_kk.id_dusun = dusun.id_dusun
WHERE id_jumlah_kk = $get_id_jumlah_kk";

$hasil = mysqli_query($db, $query);

$data = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data[] = $row;
}

// data referensi, ambil dari tabel dusun
$query_dusun = "SELECT * FROM dusun";
$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}

