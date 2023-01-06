<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Profil RT/RW</h1>

<?php include('_partials/menu_rt_rw.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>No.</th>
      <th>RT/RW</th>
      <th>Dusun</th>
      <th>Alamat</th>
      <th>Ketua RT</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_rt_rw as $rt_rw) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $rt_rw['nama_rt_rw'] ?></td>
      <td><?php echo $rt_rw['nama_dusun'] ?></td>
      <td><?php echo $rt_rw['alamat_rt_rw'] ?></td>
      <td><?php echo $rt_rw['ketua_rt_rw'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="detail_rt.php?id_rt_rw=<?php echo $rt_rw['id_rt_rw'] ?>"><i class="bi bi-sunglasses"></i> Detail</a>
            </li>
            <li>
              <a href="ubah_rt.php?id_rt_rw=<?php echo $rt_rw['id_rt_rw'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="hapus_rt.php?id_rt_rw=<?php echo $rt_rw['id_rt_rw'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
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