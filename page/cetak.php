<?php
include "koneksi.php";
include "fpdf/fpdf.php";
$id = $_GET['id'];
$show = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa WHERE id='$id'");
if(mysqli_num_rows($show) == 0)
	{   
	}
	else {
		$ed = mysqli_fetch_assoc($show);   
	}
$pdf=new FPDF();
$pdf->AddPage();
$pdf->setfont('Arial', 'B', '8');
$sql=mysqli_query($koneksi,"SELECT * FROM db_mahasiswa WHERE id='$id'");
$data=mysqli_fetch_array($sql);
$pdf->setXY(25,20);
$pdf->cell(30,6,'NPM');$pdf->cell(50,6,': '.$data['nim']);
$pdf->cell(30,6,'Nama');$pdf->cell(50,6,': '.$data['nama']);
$y_initial=41;
$y_axis1=35;
$pdf->setfont('Arial', '', '10');
$pdf->setfillcolor(255,255,255);
$no=0;
$row=6;
$y=$y_initial+$row;
$nilai=mysqli_query($koneksi,"SELECT * from db_mahasiswa where id='$id'");
while ($daftar=mysqli_fetch_array($nilai)) {
	$pdf->setY(35);
	$pdf->setX(50);
	$pdf->cell(50,6,'Design Grafis',1,0,'C',1);
	$pdf->setY(35);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['dg'],1,0,'C',1);

	$pdf->setY(41);
	$pdf->setX(50);
	$pdf->cell(50,6,'Pemograman Web',1,0,'C',1);
	$pdf->setY(41);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['web'],1,0,'C',1);

	$pdf->setY(47);
	$pdf->setX(50);
	$pdf->cell(50,6,'Analisis Perancangan P.Lunak',1,0,'C',1);
	$pdf->setY(47);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['appl'],1,0,'C',1);

	$pdf->setY(53);
	$pdf->setX(50);
	$pdf->cell(50,6,'Jaringan komputer',1,0,'C',1);
	$pdf->setY(53);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['jarkom'],1,0,'C',1);

	$pdf->setY(59);
	$pdf->setX(50);
	$pdf->cell(50,6,'Statistika',1,0,'C',1);
	$pdf->setY(59);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['statistika'],1,0,'C',1);

	$pdf->setY(65);
	$pdf->setX(50);
	$pdf->cell(50,6,'Pemograman Basis Data',1,0,'C',1);
	$pdf->setY(65);
	$pdf->setX(100);
	$pdf->cell(50,6,$daftar['basisdata'],1,0,'C',1);
}
$pdf->Output();
?>