<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil Dusun</h1>

<?php include('_partials/menu_dusun.php') ?>

<form action="fungsi_tambah_dusun.php" method="post">
  <h3>Tambah Data Profil Dusun</h3>
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Dusun</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_dusun" required></td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="alamat_dusun" required></td>
    </tr>
    <tr>
      <th>Kepala Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="kepala_dusun" required></td>
    </tr>
    <tr>
      <th>Sekretaris Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="sekre_dusun" required></td>
    </tr>
    <tr>
      <th>Bendahara Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="bendahara_dusun" required></td>
    </tr>
    <tr>
      <th>No. HP</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="no_hp_dusun" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>