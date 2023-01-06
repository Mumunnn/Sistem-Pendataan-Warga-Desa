<?php
include('../../config/koneksi.php');

// ambil dari database kartu keluarga
$query_kk = "SELECT * FROM kartu_keluarga 
LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun";

$hasil_kk = mysqli_query($db, $query_kk);

$data_kk = array();

while ($row_kk = mysqli_fetch_assoc($hasil_kk)) {
  $data_kk[] = $row_kk;
}

// ambil dari database dusun
$query_dusun = "SELECT * FROM dusun";

$hasil_dusun = mysqli_query($db, $query_dusun);

$data_dusun = array();

while ($row_dusun = mysqli_fetch_assoc($hasil_dusun)) {
  $data_dusun[] = $row_dusun;
}
