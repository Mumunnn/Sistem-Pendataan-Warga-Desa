<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jumlah Kartu Keluarga</h1>

<?php include('_partials/menu_jumlah_kk.php') ?>

<?php include('data_index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatables">
  <thead>
    <tr>
      <th>No.</th>
      <th>Dusun</th>
      <th>Desa</th>
      <th>Data Jumlah KK</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1; ?>
  <?php foreach ($data_jumlah_kk as $jumlah_kk) : ?>

    <?php
    // hitung kartu keluarga
    $query_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga WHERE id_dusun = ".$jumlah_kk['id_dusun'];
    $hasil_kartu_keluarga = mysqli_query($db, $query_kartu_keluarga);
    $jumlah_kartu_keluarga = mysqli_fetch_assoc($hasil_kartu_keluarga);

    // status
    
    ?>

    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $jumlah_kk['nama_dusun'] ?></td>
      <td><?php echo $jumlah_kk['desa'] ?></td>
      <td><?php echo $jumlah_kk['data_jumlah_kk'] ?></td>
      <td>
        <?php if ($jumlah_kk['status'] == 'Belum Valid') : ?>
        <span class="label label-danger"><?php echo $jumlah_kk['status'] ?></span>
        <?php endif; ?>

        <?php if ($jumlah_kk['status'] == 'Valid') : ?>
        <span class="label label-success"><?php echo $jumlah_kk['status'] ?></span>
        <?php endif; ?>

        <?php if ($jumlah_kk['status'] == 'Belum Dikonfirmasi') : ?>
        <span class="label label-warning"><?php echo $jumlah_kk['status'] ?></span>
        <?php endif; ?>
      </td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="../dusun_jumlah_kk/ubah_jumlah_kk.php?id_jumlah_kk=<?php echo $jumlah_kk['id_jumlah_kk'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
            </li>
            <li>
              <a href="../dusun_jumlah_kk/hapus_jumlah_kk.php?id_jumlah_kk=<?php echo $jumlah_kk['id_jumlah_kk'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
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