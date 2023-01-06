<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil RT/RW</h1>

<?php include('_partials/menu_rt_rw.php') ?>

<?php include('data_tambah.php') ?>

<form action="fungsi_tambah_rt.php" method="post">
  <h3>Tambah Data Profil RT/RW</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">RT/RW</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_rt_rw" required></td>
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
      <th>Alamat</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="alamat_rt_rw" required></td>
    </tr>
    <tr>
      <th>Ketua RT</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="ketua_rt_rw" required></td>
    </tr>
    <tr>
      <th>Sekretaris RT</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="sekre_rt_rw" required></td>
    </tr>
    <tr>
      <th>Bendahara RT</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="bendahara_rt_rw" required></td>
    </tr>
    <tr>
      <th>No. HP</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="no_hp_rt_rw" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>