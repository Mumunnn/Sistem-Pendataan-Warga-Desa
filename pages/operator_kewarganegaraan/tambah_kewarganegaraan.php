<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kewarganegaraan</h1>

<?php include('_partials/menu_kewarganegaraan.php') ?>

<form action="fungsi_tambah_kewarganegaraan.php" method="post">
  <h3>Tambah Kewarganegaraan</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Kewarganegaraan</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_kewarganegaraan" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>