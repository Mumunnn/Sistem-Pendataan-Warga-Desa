<?php
include('../../config/koneksi.php');

// ambil dari database dusun
$query_dusun = "SELECT * FROM dusun";

$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}

