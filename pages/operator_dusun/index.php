<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil Dusun</h1>

<?php include('_partials/menu_dusun.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>No.</th>
      <th>Dusun</th>
      <th>Alamat</th>
      <th>Kepala Dusun</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_dusun as $dusun) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $dusun['nama_dusun'] ?></td>
      <td><?php echo $dusun['alamat_dusun'] ?></td>
      <td><?php echo $dusun['kepala_dusun'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="detail_dusun.php?id_dusun=<?php echo $dusun['id_dusun'] ?>"><i class="bi bi-sunglasses"></i> Detail</a>
            </li>
            <li>
              <a href="ubah_dusun.php?id_dusun=<?php echo $dusun['id_dusun'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="hapus_dusun.php?id_dusun=<?php echo $dusun['id_dusun'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
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