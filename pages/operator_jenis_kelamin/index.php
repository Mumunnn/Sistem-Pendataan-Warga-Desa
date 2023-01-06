<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jenis Kelamin</h1>

<?php include('_partials/menu_jenis_kelamin.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatables">
  <thead>
    <tr>
      <th>No.</th>
      <th>Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_jenis_kelamin as $jenis_kelamin) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $jenis_kelamin['nama_jenis_kelamin'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<br>

<?php include('../_partials/bottom.php') ?>