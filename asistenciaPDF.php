<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
require_once("conectar.php");
$id=$_GET['grupo'];
$conexion = new mysqli("localhost", "root", "zero", "ingles");
$sql="select * from alumno inner join cursos where cursos.IdGrupo='$id' and cursos.NumeroControl=alumno.NumeroControl";
$result = $conexion -> query($sql);
require_once('lib/fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetXY(70,25);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Group: '.$id);
$pdf->Line(10,70,200,70);
$pdf->SetXY(10,60);
$pdf->SetFont('Arial','',12);
$pdf->Cell(190,6,'Attendance List',1,0,'C');
$pdf->SetY(75);
#ecabezado
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,0,0);
$pdf->Cell(20,10,'C.N.','TL',0,'C',1);
$pdf->Cell(100,10,'Name','TL',1,'C',1);
#Listado
$pdf->SetFont('Arial','',10);//tipo de letra
$pdf->SetTextColor(0,0,0);//color de letra
WHILE($row=mysqli_fetch_array($result)){
    $pdf->Cell(20,10,$row['NumeroControl'],'BL',0,'C');
    $pdf->Cell(100,10,utf8_decode($row['Nombre']),'BL',1,'C');
}
$pdf->Output();
}
?>