<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");
	
	$id=$_POST['idGrupo1'];
	$nivel=$_POST['nivel'];
	$aula=$_POST['aula'];
    $rfc=$_POST['rfcs'];
    $modalidad=$_POST['modalidad'];
    $inicio=$_POST['inicio'];
    $final=$_POST['finals'];
    $_SESSION['grupo']=$id;

	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$agregar=new Usuarios;
    //print_r($login);
    $login=$usuarios->buscarGrupo($id);
    if(!($login['existe'])){
		$agregar=$usuarios->agregarGrupo($id,$nivel,$aula,$rfc,$inicio,$final,$modalidad);
		if($agregar['exito']){
		header("Location:crearHorario.php");
		}
		else{
			echo "Error";
			echo "<br><a href='agregarGrupo.php'>Try again</a>";
		}
	}
	else{
		echo "The group already exist";
		echo "<br><a href='agregarGrupo.php'>Try again</a>";
	}
}
?>