<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_dusun = $_GET['id_dusun'];

// ambil dari database
$query = "SELECT * FROM dusun WHERE id_dusun = $get_id_dusun";

$hasil = mysqli_query($db, $query);

$data_dusun = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_dusun[] = $row;
}
