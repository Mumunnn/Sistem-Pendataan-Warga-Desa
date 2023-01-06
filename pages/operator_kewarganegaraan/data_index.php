<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM kewarganegaraan";

$hasil = mysqli_query($db, $query);

$data_kewarganegaraan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kewarganegaraan[] = $row;
}
