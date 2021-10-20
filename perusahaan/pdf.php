<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

define('FPDF_FONTPATH', '../ypathcss/bantuan/fpdf/font/');
require('../ypathcss/bantuan/fpdf/fpdf.php');

class PDF extends FPDF{
  function Header(){
    $this->SetTextColor(128,0,0);
    $this->SetFont('Arial','B','12');//	$this->SetFont('Times','',12);
    $this->Cell(20,0,'Data perusahaan',0,0,'L');
    $this->Ln();
    $this->Cell(5,1,'Laporan data perusahaan',0,0,'L');
    $this->Ln();
	
  }
  
  function Footer(){
	$this->SetY(-4,5);
    $this->SetY(-2,5);
    $this->Cell(0,1,$this->PageNo(),0,0,'C');
	
  }
} 

$sql = "select * from `$tbperusahaan`";
$jml =  getJum($conn,$sql);

$i=0;
$arr=getData($conn,$sql);
		foreach($arr as $d) {	
  $cell[$i][0]=$d["id_perusahaan"];
  $cell[$i][1]=$d["nama_perusahaan"];
  $cell[$i][2]=$d["alamat"];
  $cell[$i][3]=$d["website"];
  $cell[$i][4]=$d["telephone"];
  $cell[$i][5]=$d["email"];
  $cell[$i][7]=$d["skdp"];
  $cell[$i][8]=$d["wlk"];
  $i++;
}
				
				
$pdf=new PDF('L','cm','A4');
//$pdf=new PDF("P","in","Letter");
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(192,192,192);
$pdf->Cell(1,1,'No','LR',0,'L',1);
$pdf->Cell(3,1,'Nama Perusahaan','LR',0,'C',1);
$pdf->Cell(5,1,'Alamat','LR',0,'C',1);
$pdf->Cell(3,1,'Website','LR',0,'C',1);
$pdf->Cell(3,1,'telephone','LR',0,'C',1);
$pdf->Cell(5,1,'Email','LR',0,'C',1);
$pdf->Cell(3,1,'Skdp','LR',0,'C',1);
$pdf->Cell(3,1,'Wlk','LR',0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','','6');

for ($j=0;$j<$i;$j++){
  $pdf->Cell(1,1,$j+1,'B',0,'L');         // no
  $pdf->Cell(3,1,$cell[$j][1],'B',0,'L'); // nama_perusahaan
  $pdf->Cell(5,1,$cell[$j][2],'B',0,'L'); // alamat
  $pdf->Cell(3,1,$cell[$j][3],'B',0,'L'); // website
  $pdf->Cell(3,1,$cell[$j][4],'B',0,'L'); // telephone
  $pdf->Cell(5,1,$cell[$j][5],'B',0,'L'); // email
  $pdf->Cell(3,1,$cell[$j][7],'B',0,'L'); // skdp
  $pdf->Cell(3,1,$cell[$j][8],'B',0,'L'); // wlk
  $pdf->Ln();
}
$pdf->Output();
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	
	$rs->free();
	return $arr;
}
?>

