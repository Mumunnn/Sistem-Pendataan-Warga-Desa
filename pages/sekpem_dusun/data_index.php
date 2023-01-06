<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM dusun";

$hasil = mysqli_query($db, $query);

$data_dusun = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_dusun[] = $row;
}
