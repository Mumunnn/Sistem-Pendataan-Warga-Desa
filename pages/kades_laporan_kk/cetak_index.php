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

        $this->Cell(308,8,'LAPORAN DATA KARTU KELUARGA',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);

        // header tabel
        $this->cell(10,7,'NO.',1,0,'C');
        $this->cell(30,7,'NO. KK',1,0,'C');
        $this->cell(65,7,'NAMA KEPALA KELUARGA',1,0,'C');
        $this->cell(35,7,'JML. ANGGOTA',1,0,'C');
        $this->cell(100,7,'ALAMAT',1,0,'C');
        $this->cell(30,7,'RT/RW',1,0,'C');
        $this->cell(35,7,'DUSUN ',1,1,'C');

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
    $vw = mysqli_query($db, "SELECT * FROM kartu_keluarga 
    LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga
    LEFT JOIN rt_rw ON kartu_keluarga.id_rt_rw = rt_rw.id_rt_rw 
    LEFT JOIN dusun ON kartu_keluarga.id_dusun = dusun.id_dusun
    WHERE kartu_keluarga.id_dusun = '$_POST[dusun]' ");
    $no = 1;
    while ($kk = mysqli_fetch_array($vw)){

    // hitung anggota
    $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_kk = ".$kk['id_kk'];
    $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
    $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);

    $pdf->cell(10, 7, $no . '.', 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($kk['no_kk']), 1, 0, 'C');
    $pdf->cell(65, 7, strtoupper($kk['nama_lengkap']), 1, 0, 'L');
    $pdf->cell(35, 7, strtoupper($jumlah_jumlah_anggota['total']), 1, 0, 'C');
    $pdf->cell(100, 7, strtoupper($kk['alamat']), 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper($kk['nama_rt_rw']), 1, 0, 'C');
    $pdf->cell(35, 7, strtoupper($kk['nama_dusun']), 1, 1, 'C');

    $no++; } }

	$pdf->Ln(10);

$pdf->Output();
?>
