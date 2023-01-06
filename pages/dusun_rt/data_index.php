<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM rt_rw LEFT JOIN dusun ON rt_rw.id_dusun = dusun.id_dusun";

$hasil = mysqli_query($db, $query);

$data_rt_rw = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_rt_rw[] = $row;
}
