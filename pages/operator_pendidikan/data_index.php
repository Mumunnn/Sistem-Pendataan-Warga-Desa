<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM pendidikan";

$hasil = mysqli_query($db, $query);

$data_pendidikan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pendidikan[] = $row;
}
