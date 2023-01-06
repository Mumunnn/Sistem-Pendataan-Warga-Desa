<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM user LEFT JOIN jenis_kelamin ON user.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin WHERE NOT user.jabatan_user = 'Operator' ";

$hasil = mysqli_query($db, $query);

$data_user = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_user[] = $row;
}
