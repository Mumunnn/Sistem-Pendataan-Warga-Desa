<?php include('../_partials/top.php') ?>

<h1 class="page-header">Pesan</h1>

<div class="row"></div>

<div class="right_col" role="main" style="font-size: 16px;">
    <div class="page-title">
        <div class="title_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-xs-12">
            <div class="x_panel panel-chat">
                <div class="x_content">
                    <label for="">Kepada :</label>
                    <br>
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-tooggle" data-toggle="dropdown" aria-expanded="true">Pilih penerima
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href=""><i class="bi bi-person-fill"></i> Dusun Suka Bakti</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-person-fill"></i> Dusun Suka Damai</a>
                            </li>
                            <li>
                                <a href=""><i class="bi bi-person-fill"></i> Dusun Rejo Agung</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Subjek</label>
                    <textarea name="pesan" id="" class="form-control" placeholder="ketik subjek kamu di sini..."></textarea>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <form action="" method="POST" role="form">
                        <input type="hidden" name="_token" value="mlmW0ooh6umBpfHCSiUUhworIX0LQI9ydFtS8mHv">
                        <div class="form-group">
                            <label for="">Pesan</label>
                            <textarea name="pesan" id="" class="form-control" placeholder="ketik pesan kamu di sini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="bi bi-send"></i> Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<h4><b>Catatan :</b></h4>
<h5>Fitur ini belum tersedia</h5>

<?php include('../_partials/bottom.php') ?>