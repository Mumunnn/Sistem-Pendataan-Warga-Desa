<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pekerjaan</h1>

<?php include('_partials/menu_pekerjaan.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_pekerjaan.php" method="post">
  <h3>Ubah Pekerjaan</h3>
  <table class="table table-striped table-middle">
  <tr>
      <input type="hidden" name="id_pekerjaan" value="<?php echo $data_pekerjaan[0]['id_pekerjaan'] ?>">
    </tr>
    <tr>
      <th width="20%">Pekerjaan</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_pekerjaan" value="<?php echo $data_pekerjaan [0]['nama_pekerjaan'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>