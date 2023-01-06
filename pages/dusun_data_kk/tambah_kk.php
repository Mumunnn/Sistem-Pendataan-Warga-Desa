<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('_partials/menu_data_kk.php') ?>

<?php include('data_tambah.php') ?>

<form action="fungsi_tambah_kk.php" method="post">
  <h3>Tambah Data Kartu Keluarga</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Nomor KK</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="no_kk" required></td>
    </tr>
    <tr>
      <th>Nama Kepala Keluarga</th>
      <td>:</td>
      <td>
        <select class="form-control selectlive" name="id_kepala_keluarga" required>
          <option value="" selected disabled>- Pilih Kepala Keluarga -</option>
          <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['id_warga'] ?>">
            <?php echo $warga['nama_lengkap'] ?> (NIK : <?php echo $warga['nik'] ?>)
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="alamat" required></td>
    </tr>
    <tr>
      <th>RT/RW</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_rt_rw" required>
          <option value="" selected disabled>- Pilih RT/RW -</option>
          <?php foreach ($data_rt as $rt) : ?>
          <option value="<?php echo $rt['id_rt_rw'] ?>">
            <?php echo $rt['nama_rt_rw'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Dusun</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_dusun" required>
          <option value="" selected disabled>- Pilih Dusun -</option>
          <?php foreach ($data_dusun as $dusun) : ?>
          <option value="<?php echo $dusun['id_dusun'] ?>">
            <?php echo $dusun['nama_dusun'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Desa</th>
      <td>:</td>
      <td>
        <select class="form-control" name="desa" required>
          <option value="" selected disabled>- Pilih Desa -</option>
          <option value="Rasau Jaya Satu" > Rasau Jaya Satu </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kecamatan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="kecamatan" required>
          <option value="" selected disabled>- Pilih Kecamatan -</option>
          <option value="Rasau Jaya" > Rasau Jaya </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kabupaten</th>
      <td>:</td>
      <td>
        <select class="form-control" name="kabupaten" required>
          <option value="" selected disabled>- Pilih Kabupaten -</option>
          <option value="Kubu Raya" > Kubu Raya </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kode Pos</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="kode_pos" required></td>
    </tr>
    <tr>
      <th>Provinsi</th>
      <td>:</td>
      <td>
        <select class="form-control" name="provinsi" required>
          <option value="" selected disabled>- Pilih Provinsi -</option>
          <option value="Kalimantan Barat" > Kalimantan Barat </option>
        </select>
      </td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>