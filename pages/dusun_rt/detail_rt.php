<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil RT/RW</h1>

<?php include('_partials/menu_rt.php') ?>

<?php include('data_show.php') ?>


<h3>Detail Data Profil RT/RW</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">RT/RW</th>
    <td width="1%">:</td>
    <td><?php echo $data_rt_rw[0]['nama_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Dusun</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['nama_dusun'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['alamat_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Ketua RT</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['ketua_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Sekretaris RT</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['sekre_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>Bendahara RT</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['bendahara_rt_rw'] ?></td>
  </tr>
  <tr>
    <th>No.HP</th>
    <td>:</td>
    <td><?php echo $data_rt_rw[0]['no_hp_rt_rw'] ?></td>
  </tr>
</table>
</form>
<br>

<?php include('../_partials/bottom.php') ?>