<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM status_keluarga";

$hasil = mysqli_query($db, $query);

$data_status_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_status_keluarga[] = $row;
}
