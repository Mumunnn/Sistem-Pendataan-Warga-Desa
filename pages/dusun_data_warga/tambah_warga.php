<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>

<?php include('_partials/menu_data_warga.php') ?>

<?php include('data_tambah.php') ?>

<form action="fungsi_tambah_warga.php" method="post">
  <h3>Tambah Data Warga</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Nama Lengkap</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_lengkap" required></td>
    </tr>
    <tr>
      <th>NIK</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="nik" required></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_jenis_kelamin" required>
          <option value="" selected disabled>- Pilih Jenis Kelamin -</option>
          <?php foreach ($data_jk as $jk) : ?>
          <option value="<?php echo $jk['id_jenis_kelamin'] ?>">
            <?php echo $jk['nama_jenis_kelamin'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="tempat_lahir" required></td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>:</td>
      <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
    </tr>
    <tr>
      <th>Agama</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_agama" required>
          <option value="" selected disabled>- Pilih Agama -</option>
          <?php foreach ($data_agama as $agama) : ?>
          <option value="<?php echo $agama['id_agama'] ?>">
            <?php echo $agama['nama_agama'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Pendidikan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_pendidikan" required>
          <option value="" selected disabled>- Pilih Pendidikan -</option>
          <?php foreach ($data_pendidikan as $pendidikan) : ?>
          <option value="<?php echo $pendidikan['id_pendidikan'] ?>">
            <?php echo $pendidikan['nama_pendidikan'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Pekerjaan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_pekerjaan" required>
          <option value="" selected disabled>- Pilih Pekerjaan -</option>
          <?php foreach ($data_pekerjaan as $pekerjaan) : ?>
          <option value="<?php echo $pekerjaan['id_pekerjaan'] ?>">
            <?php echo $pekerjaan['nama_pekerjaan'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Golongan Darah</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_golongan_darah" required>
          <option value="" selected disabled>- Pilih Golongan Darah -</option>
          <?php foreach ($data_gd as $gd) : ?>
          <option value="<?php echo $gd['id_golongan_darah'] ?>">
            <?php echo $gd['nama_golongan_darah'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Status Pernikahan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_status_pernikahan" required>
          <option value="" selected disabled>- Pilih Status Pernikahan -</option>
          <?php foreach ($data_sp as $sp) : ?>
          <option value="<?php echo $sp['id_status_pernikahan'] ?>">
            <?php echo $sp['nama_status_pernikahan'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Status Hubungan Keluarga</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_status_keluarga" required>
          <option value="" selected disabled>- Pilih Status Keluarga -</option>
          <?php foreach ($data_sk as $sk) : ?>
          <option value="<?php echo $sk['id_status_keluarga'] ?>">
            <?php echo $sk['nama_status_keluarga'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kewarganegaraan</th>
      <td>:</td>
      <td>
        <select class="form-control" name="id_kewarganegaraan" required>
          <option value="" selected disabled>- Pilih Kewarganegaraan -</option>
          <?php foreach ($data_kewarganegaraan as $kewarganegaraan) : ?>
          <option value="<?php echo $kewarganegaraan['id_kewarganegaraan'] ?>">
            <?php echo $kewarganegaraan['nama_kewarganegaraan'] ?>
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>No. Paspor</th>
      <td>:</td>
      <td>
        <input type="text" class="form-control" name="no_paspor">
        <small>Jika tidak ada, dikosongkan saja</small>
      </td>
    </tr>
    <tr>
      <th>No. KITAS/KITAP</th>
      <td>:</td>
      <td>
        <input type="text" class="form-control" name="no_kitas_kitap">
        <small>Jika tidak ada, dikosongkan saja</small>
      </td>
    </tr>
    <tr>
      <th>Ayah</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="nama_ayah" required></td>
    </tr>
    <tr>
      <th>Ibu</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="nama_ibu" required></td>
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
    <tr>
      <th>Status Warga</th>
      <td>:</td>
      <td>
        <select class="form-control" name="status_warga" required>
          <option value="" selected disabled>- Pilih Status Warga -</option>
          <option value="Domisili" > Domisili </option>
          <option value="Domisili" > Non Domisili </option>
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