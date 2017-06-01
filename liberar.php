<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$numero=$_POST['numeroControl'];
	$estado=$_POST['estado'];
	$comentario=$_POST['comentario'];
	
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from estado where NumeroControl='$numero'";
	$result = $conexion -> query($sql);
	$row = mysqli_fetch_array($result);
if(!($row['NumeroControl']==$numero)){
	
	require_once('clases.php');
    $usuarios=new Usuarios;
    $actualizar=new Usuarios;
    //print_r($login);
    $actualizar=$usuarios->liberarAlumno($numero,$estado,$comentario);
    if($actualizar['exito']){
		header("Location:liberarAlumno.php");
	}
	else{
		echo "Error";
		echo "<br><a href='liberarAlumno.php'>Try again</a>";
	}
}

else{
	echo "The student already exist";
	echo "<br><a href='liberarAlumno.php'>Try again</a>";
}
}