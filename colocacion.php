<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$numero=$_POST['numeroControl'];
	$nivel=$_POST['nivel'];
	
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from colocacion where NumeroControl='$numero'";
	$result = $conexion -> query($sql);
	$row = mysqli_fetch_array($result);
if(!($row['NumeroControl']==$numero)){
	
	require_once('clases.php');
    $usuarios=new Usuarios;
    $actualizar=new Usuarios;
    //print_r($login);
    $actualizar=$usuarios->colocarAlumno($numero,$nivel);
    if($actualizar['exito']){
		header("Location:registrarColocacion.php");
	}
	else{
		echo "Error";
		echo "<br><a href='registrarColocacion.php'>Try again</a>";
	}
}

else{
	echo "The student already exist";
	echo "<br><a href='registrarColocacion.php'>Try again</a>";
}
}