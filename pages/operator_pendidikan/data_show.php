<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_pendidikan = $_GET['id_pendidikan'];

// ambil dari database
$query = "SELECT * FROM pendidikan WHERE id_pendidikan = $get_id_pendidikan";

$hasil = mysqli_query($db, $query);

$data_pendidikan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pendidikan[] = $row;
}
