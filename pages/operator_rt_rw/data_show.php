<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_rt_rw = $_GET['id_rt_rw'];

// ambil dari database
$query = "SELECT * FROM rt_rw LEFT JOIN dusun ON rt_rw.id_dusun = dusun.id_dusun WHERE id_rt_rw = $get_id_rt_rw";

$hasil = mysqli_query($db, $query);

$data_rt_rw = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_rt_rw[] = $row;
}

// ambil data rt_rw
$query_rt = "SELECT * from dusun INNER JOIN rt_has_dusun ON rt_has_dusun.id_dusun = dusun.id_dusun WHERE rt_has_dusun.id_rt_rw = $get_id_rt_rw";

$hasil_rt = mysqli_query($db, $query_rt);

$data_rt = array();

while ($row_rt = mysqli_fetch_assoc($hasil_rt)) {
  $data_rt[] = $row_rt;
}

// data dusun
// ambil dari database
$query_dusun = "SELECT * FROM dusun";
$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}

