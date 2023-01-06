<?php include('../_partials/top.php') ?>

<h1 class="page-header">Cetak Data Warga</h1>

<?php include('../../config/koneksi.php') ?>

<div class="box-body">
        <form action="cetak_index.php" method="POST" name="postform">
            <div class="col-xs-3">
                <div class="form-group">
                    <label>Dusun :</label>
                    <select class="form-control" name="dusun">
                        <option value="" selected disabled>Pilih Dusun</option>
                        <?php
							$f = mysqli_query($db, "SELECT * FROM dusun");
							while ($a = mysqli_fetch_array($f)) {
							?>
                            <option value="<?php echo $a['id_dusun']?>"><?php echo $a['nama_dusun']?></option>
						<?php } ?>
                    </select>
                </div>
               
                <button type="submit" name="pilih" id="search-btn" class="btn btn-success">Cetak
                </button>
            </div>
        </form>
</div>

<?php include('../_partials/bottom.php') ?>