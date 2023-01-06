<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jumlah Warga</h1>

<?php include('../../config/koneksi.php'); ?>

<div class="row">
    
    <!-- Data Warga Berdasarkan Dusun -->
    <?php include('warga_dusun.php'); ?>
    <!-- Data Warga Berdasarkan Pekerjaan -->
    <?php include('warga_pekerjaan.php'); ?>
    <!-- Data Warga Berdasarkan Agama -->
    <?php include('warga_agama.php'); ?>
    <!-- Data Warga Berdasarkan Jenis Kelamin -->
    <?php include('warga_jk.php'); ?>
    <!-- Data Warga Berdasarkan Pendidikan -->
    <?php include('warga_pendidikan.php'); ?>
    <!-- Data Warga Berdasarkan Umur -->
    <?php include('warga_umur.php'); ?>
</div>

<?php include('../_partials/bottom.php') ?>