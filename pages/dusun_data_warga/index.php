<h1 class="page-header">Data Warga</h1>

<?php include('_partials/menu_data_warga.php') ?>

<?php include('../../config/koneksi.php') ?>

<div class="box">

  <div class="box-body">
    <form action="" method="POST" name="postform">
      <div class="col-xs-3">
        <div class="form-group">
          <label>Dusun :</label>
          <select class="form-control" name="dusun">
            <option value="" selected disabled>Pilih Dusun</option>
            <?php
            $f = mysqli_query($db, "SELECT * FROM dusun");
            while ($a = mysqli_fetch_array($f)) {
            ?>
              <option value="<?php echo $a['id_dusun'] ?>"><?php echo $a['nama_dusun'] ?></option>
            <?php } ?>
          </select>
        </div>

        <button type="submit" name="pilih" id="search-btn" class="btn btn-success">Pilih
        </button>
      </div>
    </form>
  </div>
  <br><br><br><br><br><br><br>
  
  <div class="box-body">
  <table class="table table-striped table-condensed table-hover" id="datatables">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>RT/RW</th>
        <th>Dusun</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
        if ((isset($_POST['dusun']))) {
          $vw = mysqli_query($db, "SELECT * FROM warga
              LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin
              LEFT JOIN agama ON warga.id_agama = agama.id_agama
              LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
              LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan
              LEFT JOIN golongan_darah ON warga.id_golongan_darah = golongan_darah.id_golongan_darah
              LEFT JOIN status_pernikahan ON warga.id_status_pernikahan = status_pernikahan.id_status_pernikahan
              LEFT JOIN status_keluarga ON warga.id_status_keluarga = status_keluarga.id_status_keluarga
              LEFT JOIN kewarganegaraan ON warga.id_kewarganegaraan = kewarganegaraan.id_kewarganegaraan
              LEFT JOIN rt_rw ON warga.id_rt_rw = rt_rw.id_rt_rw 
              LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun
              WHERE warga.id_dusun = '$_POST[dusun]' ");
          $no = 1;
          while ($warga = mysqli_fetch_array($vw)) {
        ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><?php echo $warga['nama_lengkap'] ?></td>
              <td><?php echo $warga['nik'] ?></td>
              <td><?php echo $warga['nama_jenis_kelamin'] ?></td>
              <td><?php echo $warga['nama_rt_rw'] ?></td>
              <td><?php echo $warga['nama_dusun'] ?></td>
              <td><?php echo $warga['status_warga'] ?></td>
              <td>
            <!-- Single button -->
            <div class="btn-group pull-right">
              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right" role="menu">
                <li>
                  <a href="../dusun_data_warga/detail_warga.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="bi bi-sunglasses"></i> Detail</a>
                </li>
                <li>
                  <a href="../dusun_data_warga/ubah_warga.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
                </li>
                <li>
                  <a href="../dusun_data_warga/hapus_warga.php?id_warga=<?php echo $warga['id_warga'] ?>" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="../dusun_data_warga/cetak_masing2.php?id_warga=<?php echo $warga['id_warga'] ?>" target="_blank" ><i class="bi bi-printer"></i> Cetak</a>
                </li>
              </ul>
            </div>
          </td>
            </tr>
        <?php $no++;
          }
        } ?>
    </tbody>
  </table>
  </div>
</div>
<br>