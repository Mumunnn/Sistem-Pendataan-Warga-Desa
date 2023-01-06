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
        $this->Cell(308,8,'DESA RASAU JAYA SATU',0,1,'C');
        $this->Cell(308,8,'KEC. RASAU JAYA, KAB. KUBU RAYA ',0,1,'C');
    	$this->Cell(308,8,'PROV. KALIMANTAN BARAT',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(308,8,'LAPORAN DATA WARGA',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);

        // header tabel
        $this->cell(20,7,'NO.',1,0,'C');
        $this->cell(30,7,'NIK',1,0,'C');
        $this->cell(65,7,'NAMA WARGA',1,0,'C');
        $this->cell(35,7,'TEMPAT LAHIR',1,0,'C');
        $this->cell(20,7,'TGL. LHR',1,0,'C');
        $this->cell(35,7,'JENIS KELAMIN',1,0,'C');
        $this->cell(20,7,'RT/RW',1,0,'C');
        $this->cell(35,7,'DUSUN',1,0,'C');
        $this->cell(35,7,'STATUS ',1,1,'C');

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

$pdf = new PDF('L', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',9);

// ambil dari database

    if((isset($_POST['dusun']))) {
    $vw = mysqli_query($db, "SELECT * FROM warga
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
    WHERE warga.id_dusun = '$_POST[dusun]' ");
    $no = 1;
    while ($warga = mysqli_fetch_array($vw)){

    $pdf->cell(20, 7, $no . '.', 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($warga['nik']), 1, 0, 'C');
    $pdf->cell(65, 7, strtoupper($warga['nama_lengkap']), 1, 0, 'L');
    $pdf->cell(35, 7, strtoupper($warga['tempat_lahir']), 1, 0, 'L');
    $pdf->cell(20, 7, strtoupper($warga['tanggal_lahir']), 1, 0, 'L');
    $pdf->cell(35, 7, strtoupper($warga['nama_jenis_kelamin']), 1, 0, 'C');
    $pdf->cell(20, 7, strtoupper($warga['nama_rt_rw']), 1, 0, 'C');
    $pdf->cell(35, 7, strtoupper($warga['nama_dusun']), 1, 0, 'C');
    $pdf->cell(35, 7, strtoupper($warga['status_warga']), 1, 1, 'C');

    $no++; } }

	$pdf->Ln(10);

$pdf->Output();
?>
