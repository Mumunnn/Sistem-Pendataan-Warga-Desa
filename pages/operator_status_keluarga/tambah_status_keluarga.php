<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Status Hubungan Keluarga</h1>

<?php include('_partials/menu_status_keluarga.php') ?>

<form action="fungsi_tambah_status_keluarga.php" method="post">
  <h3>Tambah Status Hubungan Keluarga</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Status Hubungan keluarga</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_status_keluarga" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>