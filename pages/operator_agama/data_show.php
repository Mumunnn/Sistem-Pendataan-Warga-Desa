<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_agama = $_GET['id_agama'];

// ambil dari database
$query = "SELECT * FROM agama WHERE id_agama = $get_id_agama";

$hasil = mysqli_query($db, $query);

$data_agama = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_agama[] = $row;
}
