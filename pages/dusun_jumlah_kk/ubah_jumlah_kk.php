<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jumlah Kartu Keluarga</h1>

<?php include('_partials/menu_jumlah_kk.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_jumlah_kk.php" method="post">
  <h3>Ubah Data Jumlah KK</h3>
  <table class="table table-striped table-middle">
    <tr>
      <input type="hidden" name="id_jumlah_kk" value="<?php echo $data[0]['id_jumlah_kk'] ?>">
    </tr>
    <tr>
      <th width="20%">Dusun</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control" name="id_dusun" required>
          <option value="<?php echo $data[0]['id_dusun'] ?>" selected><?php echo $data[0]['nama_dusun'] ?></option>
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
          <option value="<?php echo $data[0]['desa'] ?>" selected><?php echo $data[0]['desa'] ?></option>
          <option value="Rasau Jaya Satu" > Rasau Jaya Satu </option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Total Jumlah KK</th>
      <td>:</td>
      <td><input type="number" class="form-control" name="data_jumlah_kk" value="<?php echo $data[0]['data_jumlah_kk'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>