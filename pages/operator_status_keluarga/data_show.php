<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_status_keluarga = $_GET['id_status_keluarga'];

// ambil dari database
$query = "SELECT * FROM status_keluarga WHERE id_status_keluarga = $get_id_status_keluarga";

$hasil = mysqli_query($db, $query);

$data_status_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_status_keluarga[] = $row;
}
