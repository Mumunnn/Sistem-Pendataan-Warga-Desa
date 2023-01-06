<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <a href="../dusun_data_warga/tambah_warga.php" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>
            <div class="col-md-2">
                <a href="../dashboard/index.php" class="btn btn-success">
                    <i class="bi bi-eye"></i> Lihat Data
                </a>
            </div>
            <div class="col-md-2">
                <?php if((isset($_POST['dusun']))) ?>
                <a href="../dusun_data_warga/print.php" class="btn btn-success" target="_blank">
                    <i class="bi bi-printer"></i> Cetak
                </a>
            </div>
        </div>
    </div>
</div>
<br>