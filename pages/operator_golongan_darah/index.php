<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Golongan Darah</h1>

<?php include('_partials/menu_golongan_darah.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatables">
  <thead>
    <tr>
      <th>No.</th>
      <th>Golongan Darah</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_golongan_darah as $golongan_darah) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $golongan_darah['nama_golongan_darah'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="ubah_golongan_darah.php?id_golongan_darah=<?php echo $golongan_darah['id_golongan_darah'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="hapus_golongan_darah.php?id_golongan_darah=<?php echo $golongan_darah['id_golongan_darah'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
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