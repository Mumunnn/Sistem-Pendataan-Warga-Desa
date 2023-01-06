<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM jenis_kelamin";

$hasil = mysqli_query($db, $query);

$data_jenis_kelamin = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_jenis_kelamin[] = $row;
}
