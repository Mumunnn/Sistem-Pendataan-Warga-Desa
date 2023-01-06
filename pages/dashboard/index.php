<?php include('../_partials/top.php') ?>

<!-- Operator -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Operator') : ?>
<?php include('../operator_dashboard/index.php') ?>
<?php endif; ?>

<!-- Dusun -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Dusun') : ?>
<?php include('../dusun_data_warga/index.php') ?>
<?php endif; ?>

<!-- Sekpem -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Sekpem') : ?>
<?php include('../sekpem_laporan_kk/index.php') ?>
<?php endif; ?>

<!-- Kades -->
<?php if ($_SESSION['user']['jabatan_user'] == 'Kades') : ?>
<?php include('../kades_dashboard/index.php') ?>
<?php endif; ?>

<?php include('../_partials/bottom.php') ?>