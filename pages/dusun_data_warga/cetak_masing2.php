<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/image/logo_kuburaya2.png',20,10);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(200,8,'DESA RASAU JAYA SATU',0,1,'C');
        $this->Cell(200,8,'KEC. RASAU JAYA, KAB. KUBU RAYA',0,1,'C');
    	$this->Cell(200,8,'PROV. KALIMANTAN BARAT',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(200,8,'DATA WARGA',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);
    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari url
$get_id_warga = $_GET['id_warga'];
// ambil dari database
$query = "SELECT * FROM warga
LEFT JOIN jenis_kelamin ON warga.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin
LEFT JOIN agama ON warga.id_agama = agama.id_agama
LEFT JOIN pendidikan ON warga.id_pendidikan = pendidikan.id_pendidikan
LEFT JOIN pekerjaan ON warga.id_pekerjaan = pekerjaan.id_pekerjaan
LEFT JOIN golongan_darah ON warga.id_golongan_darah = golongan_darah.id_golongan_darah
LEFT JOIN status_pernikahan ON warga.id_status_pernikahan = status_pernikahan.id_status_pernikahan
LEFT JOIN status_keluarga ON warga.id_status_keluarga = status_keluarga.id_status_keluarga
LEFT JOIN kewarganegaraan ON warga.id_kewarganegaraan = kewarganegaraan.id_kewarganegaraan
LEFT JOIN rt_rw ON warga.id_rt_rw = rt_rw.id_rt_rw
LEFT JOIN dusun ON warga.id_dusun = dusun.id_dusun 
WHERE id_warga = $get_id_warga";

$hasil = mysqli_query($db, $query);
$data_warga = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}


$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',12);

// set penomoran
$nomor = 1;
    $pdf->cell(45,7,'Nama Lengkap',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['nama_lengkap']), 0, 1, 'L');

    $pdf->cell(45,7,'NIK',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nik']),0 , 17), 0, 1, 'L');

    $pdf->cell(45,7,'Jenis Kelamin',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['nama_jenis_kelamin']), 0, 1, 'L');

    $pdf->cell(45,7,'Tempat Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['tempat_lahir']), 0, 1, 'L');

    $pdf->cell(45,7,'Tanggal Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, ($data_warga[0]['tanggal_lahir'] != '0000-00-00') ? date('d-m-Y', strtotime($data_warga[0]['tanggal_lahir'])) : '', 0, 1, 'L');

    $pdf->cell(45,7,'Agama',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_agama']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Pendidikan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_pendidikan']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Pekerjaan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_pekerjaan']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Golongan Darah',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_golongan_darah']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Status Pernikahan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_status_pernikahan']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Status Hbgn Keluarga',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_status_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kewarganegaraan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_kewarganegaraan']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'No. Paspor',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['no_paspor']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'No. KITAS/KITAP',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_warga[0]['no_kitas_kitap']), 0, 1, 'L');

    $pdf->cell(45,7,'Ayah',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_warga[0]['nama_ayah']), 0, 1, 'L');

    $pdf->cell(45,7,'Ibu',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_warga[0]['nama_ibu']), 0, 1, 'L');

    $pdf->cell(45,7,'Alamat',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(16, 7, strtoupper($data_warga[0]['alamat']), 0, 1, 'L');

    $pdf->cell(45,7,'RT/RW',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_warga[0]['nama_rt_rw']), 0, 1, 'L');

    $pdf->cell(45,7,'Dusun',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(26, 7, strtoupper($data_warga[0]['nama_dusun']), 0, 1, 'L');

    $pdf->cell(45,7,'Desa',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(24, 7, strtoupper($data_warga[0]['desa']), 0, 1, 'L');

    $pdf->cell(45,7,'Kecamatan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['kecamatan']), 0, 1, 'L');

    $pdf->cell(45,7,'Kabupaten',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['kabupaten']), 0, 1, 'L');

    $pdf->cell(45,7,'Kode Pos',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['kode_pos']), 0, 1, 'L');

    $pdf->cell(45,7,'Provinsi',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['provinsi']), 0, 1, 'L');

    $pdf->cell(45,7,'Status Warga',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['status_warga']), 0, 1, 'L');

	$pdf->Ln(10);

$pdf->Output();
?>
