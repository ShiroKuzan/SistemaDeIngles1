<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");
	$numeroControl=$_POST['controlid'];
	$nombre=$_POST['nombre'];
	$semestre=$_POST['semestre'];
    $carrera=$_POST['carrera'];

require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$agregar=new Usuarios;
    //print_r($login);
    $login=$usuarios->buscarAlumno($numeroControl);
    if(!($login['existe'])){
		$agregar=$usuarios->agregarAlumno($numeroControl,$nombre,$semestre,sha1($numeroControl),$carrera);
		if($agregar['exito']){
		header("Location:agregarEstudiantes.php");
		}
		else{
			echo "Error";
			echo "<br><a href='agregarEstudiantes.php'>Try again</a>";
		}
	}
	else{
		echo "The student already exist";
		echo "<br><a href='agregarEstudiantes.php'>Try again</a>";
	}
}
?>