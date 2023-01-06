<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_golongan_darah = $_GET['id_golongan_darah'];

// ambil dari database
$query = "SELECT * FROM golongan_darah WHERE id_golongan_darah = $get_id_golongan_darah";

$hasil = mysqli_query($db, $query);

$data_golongan_darah = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_golongan_darah[] = $row;
}
