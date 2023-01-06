<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM golongan_darah";

$hasil = mysqli_query($db, $query);

$data_golongan_darah = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_golongan_darah[] = $row;
}
