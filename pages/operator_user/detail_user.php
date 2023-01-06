<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>

<?php include('_partials/menu_user.php') ?>

<?php include('data_show.php') ?>


<h3>Detail Data User</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama</th>
    <td width="1%">:</td>
    <td><?php echo $data_user[0]['nama_user'] ?></td>
  </tr>
  <tr>
    <th>Username</th>
    <td>:</td>
    <td><?php echo $data_user[0]['username_user'] ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td><?php echo $data_user[0]['nama_jenis_kelamin'] ?></td>
  </tr>
  <tr>
    <th>Jabatan</th>
    <td>:</td>
    <td><?php echo $data_user[0]['jabatan_user'] ?></td>
  </tr>
  <tr>
    <th>No.Hp</th>
    <td>:</td>
    <td><?php echo $data_user[0]['no_hp_user'] ?></td>
  </tr>
</table>
</form>
<br>

<?php include('../_partials/bottom.php') ?>