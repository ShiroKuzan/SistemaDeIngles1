<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$rfc=$_POST['rfc'];
	$nombre=$_POST['nombre'];
	
	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$agregar=new Usuarios;
    //print_r($login);
    $login=$usuarios->buscarProfesor($rfc);
    if(!($login['existe'])){
		$agregar=$usuarios->agregarProfesor($rfc,$nombre,sha1($rfc));
		if($agregar['exito']){
		header("Location:agregarProfesores.php");
		}
		else{
			echo "Error";
			echo "<br><a href='agregarProfesores.php'>Try again</a>";
		}
	}
	else{
		echo "The professor already exist";
		echo "<br><a href='agregarProfesores.php'>Try again</a>";
	}
}
?>