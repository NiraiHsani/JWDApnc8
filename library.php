<?php
// memanggil library FPDF
requiere 'dasbor.php';
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(50,10,'DATA MAHASISWA ',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(10,7,'NPM' ,1,0,'C');
$pdf->Cell(30,7,'Program Studi' ,1,0,'C');
$pdf->Cell(20,7,'Nama' ,1,0,'C');
$pdf->Cell(20,7,'Agama' ,1,0,'C');
$pdf->Cell(55,7,'Alamat' ,1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"select  * from mahasiswa");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(10,6, $d['npm'],1,0);
  $pdf->Cell(30,6, $d['program studi'],1,0);  
  $pdf->Cell(35,6, $d['nama'],1,1);
  $pdf->Cell(20,6, $d['agama'],1,1);
  $pdf->Cell(55,6, $d['alamat'],1,1);
}
 
$pdf->Output(); 
?>