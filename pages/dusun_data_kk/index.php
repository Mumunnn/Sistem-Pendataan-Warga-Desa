<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>

<?php include('_partials/menu_data_kk.php') ?>

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
            <th>No. KK</th>
            <th>Nama Kepala Keluarga</th>
            <th>Jml. Anggota Keluarga</th>
            <th>RT/RW</th>
            <th>Dusun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
                if((isset($_POST['dusun']))) {
				$vw = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun
                WHERE kartu_keluarga.id_dusun = '$_POST[dusun]' ");
				$no = 1;
				while ($kk = mysqli_fetch_array($vw)){
                ?>
                <?php
                // hitung anggota
                $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_kk = ".$kk['id_kk'];
                $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
                $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);
                ?>
                <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $kk['no_kk'] ?></td>
                    <td><?php echo $kk['nama_lengkap'] ?></td>
                    <td><?php echo $jumlah_jumlah_anggota['total'] ?></td>
                    <td><?php echo $kk['nama_rt_rw'] ?></td>
                    <td><?php echo $kk['nama_dusun'] ?></td>
                    <td>
                <!-- Single button -->
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="../dusun_data_kk/detail_kk.php?id_kk=<?php echo $kk['id_kk'] ?>"><i class="bi bi-sunglasses"></i> Detail</a>
                        </li>
                        <li>
                            <a href="../dusun_data_kk/ubah_kk.php?id_kk=<?php echo $kk['id_kk'] ?>"><i class="bi bi-pencil-square"></i> Ubah</a>
                        </li>
                        <li>
                            <a href="../dusun_data_kk/hapus_kk.php?id_kk=<?php echo $kk['id_kk'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../dusun_data_kk/ubah_anggota.php?id_kk=<?php echo $kk['id_kk'] ?>"><i class="bi bi-pencil-square"></i> Ubah Anggota</a>
                        </li>
                    </ul>
                </div>
            </td>
                </tr>
            <?php $no++; } } ?>
    </tbody>
</table>
</div>
</div>
<br>

<?php include('../_partials/bottom.php') ?>