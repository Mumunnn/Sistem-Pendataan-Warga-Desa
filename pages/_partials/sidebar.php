<?php
function is_active($page)
{
    $uri = "$_SERVER[REQUEST_URI]";
    if (strpos($uri, $page)) {
        echo 'active';
    }
}
?>

<!-- sidebar operator -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Operator') : ?>
    <ul class="nav nav-sidebar">
        <li class="<?php is_active('dashboard'); ?>">
            <a href="../dashboard" class="text-success"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        </li>
        <li class="<?php is_active('rt_rw'); ?> <?php is_active('dusun'); ?>">
            <a href="#" data-toggle="collapse" data-target="#submenu-1" class="text-success bi bi-file-earmark-text"> Data Desa <span class="caret"></span></a>
            <ul id="submenu-1" class="collapse" role="menu">
                <li><a href="../operator_rt_rw" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Profil RT/RW</a></li>
                <li><a href="../operator_dusun" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Profil Dusun</a></li>
            </ul>
        </li>
        <li class="<?php is_active('pekerjaan'); ?>
        <?php is_active('agama'); ?>
        <?php is_active('jenis_kelamin'); ?>
        <?php is_active('pendidikan'); ?>
        <?php is_active('status_pernikahan'); ?>
        <?php is_active('status_keluarga'); ?>
        <?php is_active('golongan_darah'); ?>
        <?php is_active('kewarganegaraan'); ?>">
            <a href="#" data-toggle="collapse" data-target="#submenu-2" class="text-success bi bi-file-earmark-text"> Data Referensi <span class="caret"></span></a>
            <ul id="submenu-2" class="collapse" role="menu">
                <li><a href="../operator_pekerjaan" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Pekerjaan</a></li>
                <li><a href="../operator_agama" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Agama</a></li>
                <li><a href="../operator_jenis_kelamin" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Jenis Kelamin</a></li>
                <li><a href="../operator_pendidikan" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Pendidikan</a></li>
                <li><a href="../operator_status_pernikahan" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Status Pernikahan</a></li>
                <li><a href="../operator_status_keluarga" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Status Keluarga</a></li>
                <li><a href="../operator_golongan_darah" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Golongan Darah</a></li>
                <li><a href="../operator_kewarganegaraan" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Kewarganegaraan</a></li>
            </ul>
        </li>
        <li class="<?php is_active('operator_kk_validasi') ?> <?php is_active('jumlah_kk') ?>">
            <a href="../operator_kk_validasi" class="text-success"><i class="bi bi-file-earmark-text"></i> Data KK Validasi</a>
        </li>
        <li class="<?php is_active('user'); ?>">
            <a href="../operator_user" class="text-success"><i class="bi bi-person-fill"></i> User</a>
        </li>
    </ul>
<?php endif; ?>

<!-- sidebar dusun -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Dusun') : ?>
    <ul class="nav nav-sidebar">
        <li class="<?php is_active('dashboard'); ?> <?php is_active('warga') ?>">
            <a href="../dashboard" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Warga</a>
        </li>
        <li class="<?php is_active('dusun_data_kk') ?> <?php is_active('kartu_keluarga') ?>">
            <a href="../dusun_data_kk" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Kartu Keluarga</a>
        </li>
        <li class="<?php is_active('dusun_jumlah_kk') ?> <?php is_active('jumlah_kk') ?>">
            <a href="../dusun_jumlah_kk" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Jumlah KK</a>
        </li>
        <li class="<?php is_active('dusun_rt') ?> <?php is_active('rt_rw'); ?>">
            <a href="../dusun_rt" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Profil RT/RW</a>
        </li>
    </ul>
<?php endif; ?>

<!-- sidebar sekpem -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Sekpem') : ?>
    <ul class="nav nav-sidebar">
        <li class="<?php is_active('dashboard') ?> <?php is_active('kartu_keluarga') ?>">
            <a href="../dashboard" class="text-success"><i class="bi bi-file-earmark-text"></i> Laporan Data KK</a>
        </li>
        <li class="<?php is_active('sekpem_dusun') ?> <?php is_active('dusun') ?>">
            <a href="../sekpem_dusun" class="text-success"><i class="bi bi-file-earmark-text"></i> Data Profil Dusun</a>
        </li>
        <li class="<?php is_active('sekpem_kuantitas_kk') ?> <?php is_active('jumlah_kk') ?>">
            <a href="../sekpem_kuantitas_kk" class="text-success"><i class="bi bi-file-earmark-text"></i> Kuantitas Data KK</a>
        </li>
    </ul>
<?php endif; ?>

<!-- sidebar kades -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Kades') : ?>
    <ul class="nav nav-sidebar">
        <li class="<?php is_active('dashboard'); ?>">
            <a href="../dashboard" class="text-success"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        </li>
        <li class="<?php is_active('kades_laporan_kk') ?> <?php is_active('kartu_keluarga') ?>">
            <a href="../kades_laporan_kk" class="text-success"><i class="bi bi-file-earmark-text"></i> Laporan Data KK</a>
        </li>
    </ul>
<?php endif; ?>