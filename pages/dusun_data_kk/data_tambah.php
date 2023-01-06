<?php
include('../../config/koneksi.php');

// ambil dari database warga
$query_warga = "SELECT * FROM warga";

$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
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
