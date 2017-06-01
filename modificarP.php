<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");
	$rfc=$_GET['rfc'];
    $conexion = new mysqli("localhost", "root", "zero", "ingles");
    $query="update profesor set Activo='n' WHERE RFC='$rfc'";
    $datos=$conexion -> query($query);
    $aUsuario=array();
    $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
    if($aUsuario['exito']){
     	header("Location:modificarProfesor.php");
	}
	else{
		echo "Error";
		echo "<br><a href='modificarProfesor.php'>Try again</a>";
	}
}
?>