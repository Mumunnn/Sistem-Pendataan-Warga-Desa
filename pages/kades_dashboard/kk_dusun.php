<div class="col-sm-6">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="tile">
                <h3 class="tile-title">Data Jumlah KK Berdasarkan Dusun</h3>
                <canvas id="myChartKk" style="width:100%;max-width:500px"></canvas>

                <script>
                    xValuesKk = ["Suka Damai", "Kebon Jeruk", "Suka Bakti", "Rejo Agung", "Purwodadi", "Bina Karya"];
                    yValuesKk = [
                        <?php
                        $jumlah_sd = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Suka Damai'");
                        echo mysqli_num_rows($jumlah_sd);
                        ?>,

                        <?php
                        $jumlah_kj = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Kebon Jeruk'");
                        echo mysqli_num_rows($jumlah_kj);
                        ?>,

                        <?php
                        $jumlah_sb = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Suka Bakti'");
                        echo mysqli_num_rows($jumlah_sb);
                        ?>,

                        <?php
                        $jumlah_ra = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Rejo Agung'");
                        echo mysqli_num_rows($jumlah_ra);
                        ?>,

                        <?php
                        $jumlah_p = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Purwodadi'");
                        echo mysqli_num_rows($jumlah_p);
                        ?>,

                        <?php
                        $jumlah_bk = mysqli_query($db, "SELECT * FROM kartu_keluarga 
                        LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
                        LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
                        LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun 
        WHERE nama_dusun='Bina Karya'");
                        echo mysqli_num_rows($jumlah_bk);
                        ?>,
                    ];
                    barColorsKk = "red";
                    // var barColors = ["red", "green","blue","orange","black", "grey", "yellow"];

                    new Chart("myChartKk", {
                        type: "bar",
                        data: {
                            labels: xValuesKk,
                            datasets: [{
                                backgroundColor: barColorsKk,
                                data: yValuesKk
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