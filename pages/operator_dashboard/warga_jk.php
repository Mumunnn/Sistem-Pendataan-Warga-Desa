<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3>Data Jumlah Warga Berdasarkan Jenis Kelamin</h3>
                <canvas id="myChartJK" style="width:100%;max-width:300px"></canvas>

                <script>
                    xValuesJK = ["Laki-Laki", "Perempuan"];
                    yValuesJK = [
                        <?php
                        $jumlah_l = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin 
        WHERE nama_jenis_kelamin='Laki-Laki'");
                        echo mysqli_num_rows($jumlah_l);
                        ?>,

                        <?php
                        $jumlah_p = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin 
        WHERE nama_jenis_kelamin='Perempuan'");
                        echo mysqli_num_rows($jumlah_p);
                        ?>
                    ];
                    barColorsJK = "orange";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartJK", {
                        type: "bar",
                        data: {
                            labels: xValuesJK,
                            datasets: [{
                                backgroundColor: barColorsJK,
                                data: yValuesJK
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Data Jumlah Warga Berdasarkan Jenis Kelamin"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>