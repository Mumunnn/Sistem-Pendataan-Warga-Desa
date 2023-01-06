<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_user = $_GET['id_user'];

// ambil dari database
$query = "SELECT * FROM user LEFT JOIN jenis_kelamin ON user.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin WHERE id_user = $get_id_user";

$hasil = mysqli_query($db, $query);

$data_user = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_user[] = $row;
}

// ambil data user
$query_rt = "SELECT * from jenis_kelamin INNER JOIN user_has_jk ON user_has_jk.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin WHERE user_has_jk.id_user = $get_id_user";

$hasil_rt = mysqli_query($db, $query_rt);

$data_rt = array();

while ($row_rt = mysqli_fetch_assoc($hasil_rt)) {
  $data_rt[] = $row_rt;
}

// data jenis kelamin
// ambil dari database
$query_jk = "SELECT * FROM jenis_kelamin";
$hasil_jk = mysqli_query($db, $query_jk);

$data_jk = array();

while ($row_jk = mysqli_fetch_assoc($hasil_jk)) {
  $data_jk[] = $row_jk;
}
