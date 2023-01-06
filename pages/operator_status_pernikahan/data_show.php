<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_status_pernikahan = $_GET['id_status_pernikahan'];

// ambil dari database
$query = "SELECT * FROM status_pernikahan WHERE id_status_pernikahan = $get_id_status_pernikahan";

$hasil = mysqli_query($db, $query);

$data_status_pernikahan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_status_pernikahan[] = $row;
}
