<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3>Data Jumlah Warga Berdasarkan Pendidikan</h3>
                <canvas id="myChartPendidikan" style="width:100%;max-width:500px"></canvas>

                <script>
                    xValuesPendidikan = ["Tidak Sekolah", "SD", "SMP", "SMA", "S1"];
                    yValuesPendidikan = [
                        <?php
                        $jumlah_ts = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
        WHERE nama_pendidikan = 'Tidak Sekolah'");
                        echo mysqli_num_rows($jumlah_ts);
                        ?>,

                        <?php
                        $jumlah_sd = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan 
        WHERE nama_pendidikan = 'SD'");
                        echo mysqli_num_rows($jumlah_sd);
                        ?>,

                        <?php
                        $jumlah_smp = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
        WHERE nama_pendidikan = 'SMP'");
                        echo mysqli_num_rows($jumlah_smp);
                        ?>,

                        <?php
                        $jumlah_sma = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
        WHERE nama_pendidikan = 'SMA'");
                        echo mysqli_num_rows($jumlah_sma);
                        ?>,

                        <?php
                        $jumlah_s1 = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
        WHERE nama_pendidikan = 'S1'");
                        echo mysqli_num_rows($jumlah_s1);
                        ?>
                    ];
                    barColorsPendidikan = "grey";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartPendidikan", {
                        type: "bar",
                        data: {
                            labels: xValuesPendidikan,
                            datasets: [{
                                backgroundColor: barColorsPendidikan,
                                data: yValuesPendidikan
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Data Jumlah Warga Berdasarkan Pendidikan"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>