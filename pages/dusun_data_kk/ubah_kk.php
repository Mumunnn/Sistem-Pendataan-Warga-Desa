<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('_partials/menu_data_kk.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_kk.php" method="post">
  <h3>Ubah Data Kartu Keluarga</h3>
  <table class="table table-striped table-middle">
    <tr>
      <input type="hidden" name="id_kk" value="<?php echo $data_kk[0]['id_kk'] ?>">
    </tr>
    <tr>
      <th width="20%">Nomor KK</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="no_kk" value="<?php echo $data_kk[0]['no_kk'] ?>" required></td>
    </tr>
    <tr>
      <th>Nama Kepala Keluarga</th>
      <td>:</td>
      <td>
        <select class="form-control selectlive" name="id_kepala_keluarga" required>
          <option value="<?php echo $data_kk[0]['id_kepala_keluarga'] ?>" selected><?php echo $data_kk[0]['nama_lengkap'] ?></option>
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
      <td><input type="text" class="form-control" name="kode_pos" value="<?php echo $data_kk[0]['alamat'] ?>" required></td>
    </tr>
    <tr>
      <th>RT/RW</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_rt_rw" required>
          <option value="<?php echo $data_kk[0]['id_rt_rw'] ?>" selected><?php echo $data_kk[0]['nama_rt_rw'] ?></option>
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
          <option value="<?php echo $data_kk[0]['id_dusun'] ?>" selected><?php echo $data_kk[0]['nama_dusun'] ?></option>
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
          <option value="<?php echo $data_kk[0]['desa'] ?>" selected><?php echo $data_kk[0]['desa'] ?></option>
          <option value="Rasau Jaya Satu" > Rasau Jaya Satu </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kecamatan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="kecamatan" required>
          <option value="<?php echo $data_kk[0]['kecamatan'] ?>" selected><?php echo $data_kk[0]['kecamatan'] ?></option>
          <option value="Rasau Jaya" > Rasau Jaya </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kabupaten</th>
      <td>:</td>
      <td>
        <select class="form-control" name="kabupaten" required>
          <option value="<?php echo $data_kk[0]['kabupaten'] ?>" selected><?php echo $data_kk[0]['kabupaten'] ?></option>
          <option value="Kubu Raya" > Kubu Raya </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kode Pos</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="kode_pos" value="<?php echo $data_kk[0]['kode_pos'] ?>" required></td>
    </tr>
    <tr>
      <th>Provinsi</th>
      <td>:</td>
      <td>
        <select class="form-control" name="provinsi" required>
          <option value="<?php echo $data_kk[0]['provinsi'] ?>" selected><?php echo $data_kk[0]['provinsi'] ?></option>
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