<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3 class="tile-title">Data Jumlah Warga Berdasarkan Agama</h3>
                <canvas id="myChartAgama" style="width:100%;max-width:300px"></canvas>

                <script>
                    xValuesAgama = ["Islam", "Kristen", "Budha"];
                    yValuesAgama = [
                        <?php
                        $jumlah_islam = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN agama ON warga.id_agama = agama.id_agama
        WHERE nama_agama = 'Islam'");
                        echo mysqli_num_rows($jumlah_islam);
                        ?>,

                        <?php
                        $jumlah_kristen = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN agama ON warga.id_agama = agama.id_agama 
        WHERE nama_agama = 'Kristen'");
                        echo mysqli_num_rows($jumlah_kristen);
                        ?>,

                        <?php
                        $jumlah_budha = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN agama ON warga.id_agama = agama.id_agama 
        WHERE nama_agama = 'Budha'");
                        echo mysqli_num_rows($jumlah_budha);
                        ?>
                    ];
                    barColorsAgama = "lightblue";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartAgama", {
                        type: "bar",
                        data: {
                            labels: xValuesAgama,
                            datasets: [{
                                backgroundColor: barColorsAgama,
                                data: yValuesAgama
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Data Jumlah Warga Berdasarkan Agama"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>