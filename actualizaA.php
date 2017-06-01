<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
require_once('clases.php');
    $numero=$_POST['controlid'];
    $semestre=$_POST['semestre'];
    $carrera=$_POST['carrera'];
    $usuarios=new Usuarios;
    $actualizar=$usuarios->actualizarAlumno($numero,$semestre,$carrera);
    if($actualizar['exito']){
		header("Location:modificarAlumno.php");
		}
		else{
			echo "Error";
			echo "<br><a href='modificarAlumno.php'>Try again</a>";
		}
echo json_encode($actualizar);
}
?>