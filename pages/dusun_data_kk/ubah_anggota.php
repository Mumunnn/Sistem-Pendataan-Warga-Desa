<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('_partials/menu_data_kk.php') ?>

<?php include('data_ubah_anggota.php') ?>

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
            <td><?php echo $nomor++ ?></td>
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
                        <li>
                            <a href="../dusun_data_kk/hapus_anggota.php?id_warga=<?php echo $anggota['id_warga'] ?>&id_kk=<?php echo $data_kk[0]['id_kk'] ?>" onclick="return confirm('Yakin hapus dari anggota?')">
                                <span class="glyphicon glyphicon-trash"></span> Hapus Anggota
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br>

<h3>Tambah Anggota Keluarga</h3>
<form action="fungsi_ubah_anggota.php" method="post">
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Nama Warga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_warga" required>
          <option value="" selected disabled>- pilih -</option>
          <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['id_warga'] ?>">
            <?php echo $warga['nama_lengkap'] ?> (NIK: <?php echo $warga['nik'] ?>)
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
  </table>

  <input type="hidden" name="id_kk" value="<?php echo $get_id_kk ?>">

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-plus"></i> Tambahkan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>