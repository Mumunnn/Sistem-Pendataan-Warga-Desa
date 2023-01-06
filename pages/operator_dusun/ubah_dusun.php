<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil Dusun</h1>

<?php include('_partials/menu_dusun.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_dusun.php" method="post">
  <h3>Ubah Data Profil Dusun</h3>
  <table class="table table-striped table-middle">
  <tr>
      <input type="hidden" name="id_dusun" value="<?php echo $data_dusun[0]['id_dusun'] ?>">
    </tr>
    <tr>
      <th width="20%">Dusun</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_dusun" value="<?php echo $data_dusun[0]['nama_dusun'] ?>" required></td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="alamat_dusun" value="<?php echo $data_dusun[0]['alamat_dusun'] ?>" required></td>
    </tr>
    <tr>
      <th>Kepala Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="kepala_dusun" value="<?php echo $data_dusun[0]['kepala_dusun'] ?>" required></td>
    </tr>
    <tr>
      <th>Sekretaris Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="sekre_dusun" value="<?php echo $data_dusun[0]['sekre_dusun'] ?>" required></td>
    </tr>
    <tr>
      <th>Bendahara Dusun</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="bendahara_dusun" value="<?php echo $data_dusun[0]['bendahara_dusun'] ?>" required></td>
    </tr>
    <tr>
      <th>No. HP</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="no_hp_dusun" value="<?php echo $data_dusun[0]['no_hp_dusun'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>