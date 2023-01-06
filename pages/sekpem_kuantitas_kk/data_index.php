<?php
include('../../config/koneksi.php');

// ambil dari database
$query = " SELECT * FROM jumlah_kk
LEFT JOIN dusun ON jumlah_kk.id_dusun = dusun.id_dusun";

$hasil = mysqli_query($db, $query);

$data_jumlah_kk = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_jumlah_kk[] = $row;
}
