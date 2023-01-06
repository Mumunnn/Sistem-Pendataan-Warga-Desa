<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_kewarganegaraan = $_GET['id_kewarganegaraan'];

// ambil dari database
$query = "SELECT * FROM kewarganegaraan WHERE id_kewarganegaraan = $get_id_kewarganegaraan";

$hasil = mysqli_query($db, $query);

$data_kewarganegaraan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kewarganegaraan[] = $row;
}
