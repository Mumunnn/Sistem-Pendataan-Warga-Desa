<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Sistem Informasi Pendataan Warga Desa Rasau Jaya Satu</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text">Hai, <?php echo $_SESSION['user']['nama_user'] ?></p>
                <!-- navbar kades -->
                <?php if ($_SESSION['user']['jabatan_user'] == 'Kades') : ?>
                    <li><a href="../dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                <?php endif; ?>
                <!-- navbar operator -->
                <?php if ($_SESSION['user']['jabatan_user'] == 'Operator') : ?>
                    <li><a href="../dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                <?php endif; ?>
                <!-- navbar dusun -->
                <?php if ($_SESSION['user']['jabatan_user'] == 'Dusun') : ?>
                    <li><a href="../dusun_notifikasi"><i class="bi bi-bell"></i> Notifikasi</a></li>
                <?php endif; ?>
                <!-- navbar sekpem -->
                <?php if ($_SESSION['user']['jabatan_user'] == 'Sekpem') : ?>
                    <li><a href="../sekpem_pesan"><i class="bi bi-chat-dots"></i> Pesan</a></li>
                <?php endif; ?>

                <li><a href="../login/logout.php"><i class="bi bi-box-arrow-right"></i> Keluar</a></li>
            </ul>
        </div>
</nav>