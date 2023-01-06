<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jumlah Kartu Keluarga</h1>

<?php include('_partials/menu_jumlah_kk.php') ?>

<?php include('data_tambah.php') ?>

<form action="fungsi_tambah_jumlah_kk.php" method="post">
  <h3>Tambah Data Jumlah KK</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Dusun</th>
      <td width="1%">:</td>
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
      <th>Data Jumlah KK</th>
      <td>:</td>
      <td><input type="number" class="form-control" name="data_jumlah_kk" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>