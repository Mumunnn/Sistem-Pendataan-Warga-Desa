<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3 class="tile-title">Data Jumlah Warga Berdasarkan Pekerjaan</h3>
                <canvas id="myChartPekerjaan" style="width:100%;max-width:500px"></canvas>

                <script>
                    xValuesPekerjaan = ["Petani", "Buruh", "Guru"];
                    yValuesPekerjaan = [
                        <?php
                        $jumlah_petani = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan 
        WHERE nama_pekerjaan = 'Petani'");
                        echo mysqli_num_rows($jumlah_petani);
                        ?>,

                        <?php
                        $jumlah_buruh = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan 
        WHERE nama_pekerjaan = 'Buruh'");
                        echo mysqli_num_rows($jumlah_buruh);
                        ?>,

                        <?php
                        $jumlah_guru = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan 
        WHERE nama_pekerjaan = 'Guru'");
                        echo mysqli_num_rows($jumlah_guru);
                        ?>
                    ];
                    barColorsPekerjaan = "green";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartPekerjaan", {
                        type: "bar",
                        data: {
                            labels: xValuesPekerjaan,
                            datasets: [{
                                backgroundColor: barColorsPekerjaan,
                                data: yValuesPekerjaan
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Data Jumlah Warga Berdasarkan Pekerjaan"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>