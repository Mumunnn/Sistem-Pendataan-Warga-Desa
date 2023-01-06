<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Golongan Darah</h1>

<?php include('_partials/menu_golongan_darah.php') ?>

<form action="fungsi_tambah_golongan_darah.php" method="post">
  <h3>Tambah Golongan Darah</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Golongan Darah</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_golongan_darah" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>