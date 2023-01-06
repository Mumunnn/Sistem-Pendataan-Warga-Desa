<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Status Pernikahan</h1>

<?php include('_partials/menu_status_pernikahan.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatables">
  <thead>
    <tr>
      <th>No.</th>
      <th>Status Pernikahan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_status_pernikahan as $status_pernikahan) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $status_pernikahan['nama_status_pernikahan'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="ubah_status_pernikahan.php?id_status_pernikahan=<?php echo $status_pernikahan['id_status_pernikahan'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="hapus_status_pernikahan.php?id_status_pernikahan=<?php echo $status_pernikahan['id_status_pernikahan'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<br>

<?php include('../_partials/bottom.php') ?>