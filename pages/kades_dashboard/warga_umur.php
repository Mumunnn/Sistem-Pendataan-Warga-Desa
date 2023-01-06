<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3>Data Jumlah Warga Berdasarkan Umur</h3>
                <canvas id="myChartUmur" style="width:100%;max-width:500px"></canvas>

                <script>
                    xValuesUmur = ["Balita", "Anak-Anak", "Remaja", "Dewasa", "Lansia"];
                    yValuesUmur = [
                        <?php
                        $jumlah_balita = mysqli_query($db, "SELECT * FROM warga 
                        WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) < 3 AND tanggal_lahir != '0000-00-00'");
                        echo mysqli_num_rows($jumlah_balita);
                        ?>,
                        <?php
                        $jumlah_anak = mysqli_query($db, "SELECT * FROM warga 
                        WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) BETWEEN 3 AND 11 AND tanggal_lahir != '0000-00-00'");
                        echo mysqli_num_rows($jumlah_anak);
                        ?>,
                        <?php
                        $jumlah_remaja = mysqli_query($db, "SELECT * FROM warga 
                        WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) BETWEEN 12 AND 18 AND tanggal_lahir != '0000-00-00'");
                        echo mysqli_num_rows($jumlah_remaja);
                        ?>,
                        <?php
                        $jumlah_dewasa = mysqli_query($db, "SELECT * FROM warga 
                        WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) BETWEEN 19 AND 50 AND tanggal_lahir != '0000-00-00'");
                        echo mysqli_num_rows($jumlah_dewasa);
                        ?>,
                        <?php
                        $jumlah_lansia = mysqli_query($db, "SELECT * FROM warga 
                        WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) > 50 AND tanggal_lahir != '0000-00-00'");
                        echo mysqli_num_rows($jumlah_lansia);
                        ?>
                    ];
                    barColorsUmur = "pink";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartUmur", {
                        type: "bar",
                        data: {
                            labels: xValuesUmur,
                            datasets: [{
                                backgroundColor: barColorsUmur,
                                data: yValuesUmur
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
                <br>
                <p><b>Keterangan :</b></p>
                <p>Balita       = < 3 tahun</p>
                <p>Anak-Anak    = 3 - 11 tahun </p>
                <p>Remaja       = 12 - 18 tahun</p>
                <p>Dewasa       = 19 - 50 tahun</p>
                <p>Lansia       = > 50 tahun</p>
            </div>
        </div>
    </div>
</div>