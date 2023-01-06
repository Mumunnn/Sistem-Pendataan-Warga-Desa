<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>

<?php include('_partials/menu_data_warga.php') ?>

<?php include('data_show.php') ?>


<h3>Detail Data Warga</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Lengkap</th>
    <td width="1%">:</td>
    <td><?php echo $data[0]['nama_lengkap'] ?></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><?php echo $data[0]['nik'] ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_jenis_kelamin'] ?></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><?php echo $data[0]['tempat_lahir'] ?></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><?php echo $data[0]['tanggal_lahir'] ?></td>
  </tr>
  <tr>
    <th>Agama</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_agama'] ?></td>
  </tr>
  <tr>
    <th>Pendidikan</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_pendidikan'] ?></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_pekerjaan'] ?></td>
  </tr>
  <tr>
    <th>Golongan Darah</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_golongan_darah'] ?></td>
  </tr>
  <tr>
    <th>Status Pernikahan</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_status_pernikahan'] ?></td>
  </tr>
  <tr>
    <th>Status Hubungan Keluarga</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_status_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Kewarganegaraan</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_kewarganegaraan'] ?></td>
  </tr>
  <tr>
    <th>No. Paspor</th>
    <td>:</td>
    <td><?php echo $data[0]['no_paspor'] ?></td>
  </tr>
  <tr>
    <th>No. KITAS/KITAP</th>
    <td>:</td>
    <td><?php echo $data[0]['no_kitas_kitap'] ?></td>
  </tr>
  <tr>
    <th>Ayah</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_ayah'] ?></td>
  </tr>
  <tr>
    <th>Ibu</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_ibu'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data[0]['alamat'] ?></td>
  </tr>
  <tr>
    <th>RT/RW</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><?php echo $data[0]['nama_dusun'] ?></td>
  </tr>
  <tr>
    <th>Desa</th>
    <td>:</td>
    <td><?php echo $data[0]['desa'] ?></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data[0]['kecamatan'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten</th>
    <td>:</td>
    <td><?php echo $data[0]['kabupaten'] ?></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><?php echo $data[0]['kode_pos'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data[0]['provinsi'] ?></td>
  </tr>
  <tr>
    <th>Status Warga</th>
    <td>:</td>
    <td><?php echo $data[0]['status_warga'] ?></td>
  </tr>
</table>
</form>
<br>

<?php include('../_partials/bottom.php') ?>