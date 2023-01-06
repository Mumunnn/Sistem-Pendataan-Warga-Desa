<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Golongan Darah</h1>

<?php include('_partials/menu_golongan_darah.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_golongan_darah.php" method="post">
  <h3>Ubah Golongan Darah</h3>
  <table class="table table-striped table-middle">
  <tr>
      <input type="hidden" name="id_golongan_darah" value="<?php echo $data_golongan_darah[0]['id_golongan_darah'] ?>">
    </tr>
    <tr>
      <th width="20%">Golongan Darah</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_golongan_darah" value="<?php echo $data_golongan_darah [0]['nama_golongan_darah'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>