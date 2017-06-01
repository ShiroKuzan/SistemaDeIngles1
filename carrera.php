<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$nombre=$_POST['nombre'];
	
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from carrera where Ncarrera='$nombre'";
	$result = $conexion -> query($sql);
	$row = mysqli_fetch_array($result);
if(!($row['NumeroControl']==$nombre)){
    $sql="insert into carrera (Ncarrera) values ('$nombre')";
	$result = $conexion -> query($sql);
	header("Location:agregarCarrera.php");
}

else{
	echo "The career already exist";
	echo "<br><a href='agregarCarrera.php'>Try again</a>";
}
}