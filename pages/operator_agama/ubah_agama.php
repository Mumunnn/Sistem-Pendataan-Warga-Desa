<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Agama</h1>

<?php include('_partials/menu_agama.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_agama.php" method="post">
  <h3>Ubah Agama</h3>
  <table class="table table-striped table-middle">
  <tr>
      <input type="hidden" name="id_agama" value="<?php echo $data_agama[0]['id_agama'] ?>">
    </tr>
    <tr>
      <th width="20%">Agama</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_agama" value="<?php echo $data_agama [0]['nama_agama'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>