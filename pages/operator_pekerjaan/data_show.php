<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_pekerjaan = $_GET['id_pekerjaan'];

// ambil dari database
$query = "SELECT * FROM pekerjaan WHERE id_pekerjaan = $get_id_pekerjaan";

$hasil = mysqli_query($db, $query);

$data_pekerjaan = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pekerjaan[] = $row;
}
