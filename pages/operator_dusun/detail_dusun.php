<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil Dusun</h1>

<?php include('_partials/menu_dusun.php') ?>

<?php include('data_show.php') ?>


<h3>Detail Data Profil Dusun</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Dusun</th>
    <td width="1%">:</td>
    <td><?php echo $data_dusun[0]['nama_dusun'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data_dusun[0]['alamat_dusun'] ?></td>
  </tr>
  <tr>
    <th>Kepala Dusun</th>
    <td>:</td>
    <td><?php echo $data_dusun[0]['kepala_dusun'] ?></td>
  </tr>
  <tr>
    <th>Sekretaris Dusun</th>
    <td>:</td>
    <td><?php echo $data_dusun[0]['sekre_dusun'] ?></td>
  </tr>
  <tr>
    <th>Bendahara Dusun</th>
    <td>:</td>
    <td><?php echo $data_dusun[0]['bendahara_dusun'] ?></td>
  </tr>
  <tr>
    <th>No.HP</th>
    <td>:</td>
    <td><?php echo $data_dusun[0]['no_hp_dusun'] ?></td>
  </tr>
</table>
</form>
<br>

<?php include('../_partials/bottom.php') ?>