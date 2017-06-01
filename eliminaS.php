<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");
	$id=$_GET['id'];
	$numero=$_GET['numero'];
    $conexion = new mysqli("localhost", "root", "zero", "ingles");
    $query="DELETE FROM cursos WHERE IdGrupo='$id' and NumeroControl='$numero'";
    $datos=$conexion -> query($query);
    $aUsuario=array();
    $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
    if($aUsuario['exito']){
     	header("Location:modificarGrupo.php?grupo=$id");
	}
	else{
		echo "Error";
		echo "<br><a href='modificarGrupo?grupo=$id.php'>Try again</a>";
	}
}
?>