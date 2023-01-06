<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('_partials/menu_data_kk.php') ?>

<?php include('data_show.php') ?>


<h3>Detail Data Kartu Keluarga</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor KK</th>
    <td width="1%">:</td>
    <td><?php echo $data_kk[0]['no_kk'] ?></td>
  </tr>
  <tr>
    <th>Nama Kepala Keluarga</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['nama_lengkap'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['alamat'] ?></td>
  </tr>
  <tr>
    <th>RT/RW</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['nama_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['nama_dusun'] ?></td>
  </tr>
  <tr>
    <th>Desa</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['desa'] ?></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['kecamatan'] ?></td>
  </tr>
  <tr>
    <th>Kabupaten</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['kabupaten'] ?></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['kode_pos'] ?></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><?php echo $data_kk[0]['provinsi'] ?></td>
  </tr>
</table>
</form>
<br>

<h3>Anggota Keluarga</h3>
<table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Status Hubungan Keluarga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php foreach ($data_anggota as $anggota) : ?>
        <tr>
            <td><?php echo $nomor++ ?>.</td>
            <td><?php echo $anggota['nama_lengkap'] ?></td>
            <td><?php echo $anggota['nik'] ?></td>
            <td><?php echo $anggota['nama_jenis_kelamin'] ?></td>
            <td><?php echo $anggota['nama_status_keluarga'] ?></td>
            <td>
                <!-- Single button -->
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li>
                        <a href="../dusun_data_warga/detail_warga.php?id_warga=<?php echo $anggota['id_warga'] ?>"><i class="bi bi-sunglasses"></i> Detail</a>
                      </li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>



<?php include('../_partials/bottom.php') ?>