<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pendidikan</h1>

<?php include('_partials/menu_pendidikan.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatables">
  <thead>
    <tr>
      <th>No.</th>
      <th>Pendidikan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_pendidikan as $pendidikan) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $pendidikan['nama_pendidikan'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="ubah_pendidikan.php?id_pendidikan=<?php echo $pendidikan['id_pendidikan'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="hapus_pendidikan.php?id_pendidikan=<?php echo $pendidikan['id_pendidikan'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
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