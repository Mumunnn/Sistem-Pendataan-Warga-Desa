<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kewarganegaraan</h1>

<?php include('_partials/menu_kewarganegaraan.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_kewarganegaraan.php" method="post">
  <h3>Ubah Kewarganegaraan</h3>
  <table class="table table-striped table-middle">
  <tr>
      <input type="hidden" name="id_kewarganegaraan" value="<?php echo $data_kewarganegaraan[0]['id_kewarganegaraan'] ?>">
    </tr>
    <tr>
      <th width="20%">Kewarganegaraan</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_kewarganegaraan" value="<?php echo $data_kewarganegaraan [0]['nama_kewarganegaraan'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>