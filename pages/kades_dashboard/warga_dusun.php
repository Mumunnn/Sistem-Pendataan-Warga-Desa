<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3 class="tile-title">Data Jumlah Warga Berdasarkan Dusun</h3>
                <canvas id="myChartDusun" style="width:100%;max-width:500px"></canvas>

                <script>
                    xValuesDusun = ["Suka Damai", "Kebon Jeruk", "Suka Bakti", "Rejo Agung", "Purwodadi", "Bina Karya"];
                    yValuesDusun = [
                        <?php
                        $jumlah_sd = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Suka Damai'");
                        echo mysqli_num_rows($jumlah_sd);
                        ?>,

                        <?php
                        $jumlah_kj = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Kebon Jeruk'");
                        echo mysqli_num_rows($jumlah_kj);
                        ?>,
                        
                        <?php
                        $jumlah_sb = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Suka Bakti'");
                        echo mysqli_num_rows($jumlah_sb);
                        ?>,

                        <?php
                        $jumlah_ra = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Rejo Agung'");
                        echo mysqli_num_rows($jumlah_ra);
                        ?>,

                        <?php
                        $jumlah_p = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Purwodadi'");
                        echo mysqli_num_rows($jumlah_p);
                        ?>,

                        <?php
                        $jumlah_bk = mysqli_query($db, "SELECT * FROM warga
        LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Bina Karya'");
                        echo mysqli_num_rows($jumlah_bk);
                        ?>,
                    ];
                    barColorsDusun = "red";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartDusun", {
                        type: "bar",
                        data: {
                            labels: xValuesDusun,
                            datasets: [{
                                backgroundColor: barColorsDusun,
                                data: yValuesDusun
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "Data Jumlah Warga Berdasarkan Dusun"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>