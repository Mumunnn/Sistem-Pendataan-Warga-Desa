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
