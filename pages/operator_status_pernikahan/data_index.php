<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM status_pernikahan";

$hasil = mysqli_query($db, $query);

$data_status_pernikahan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_status_pernikahan[] = $row;
}
