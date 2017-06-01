<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$numero=$_POST['number'];
	$id=$_POST['grupo'];
	$_SESSION['grupo']=$_POST['grupo'];
	
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from alumno where NumeroControl='$numero'";
	$result = $conexion -> query($sql);
	$row = mysqli_fetch_array($result);
	if($row['Activo']=='y'){
	
	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$agregar=new Usuarios;
    //print_r($login);
    $login=$usuarios->buscarEGrupo($id,$numero);
    if(!($login['existe'])){
		$agregar=$usuarios->agregarEGrupo($id,$numero);
		if($agregar['exito']){
		header("Location:modificarGrupo.php");
		}
		else{
			echo "Error";
			echo "<br><a href='modificarGrupo.php'>Try again</a>";
		}
	}
	else{
		echo "The student already exist";
		echo "<br><a href='modificarGrupo.php'>Try again</a>";
	}
	}
	else{
		echo "The student does not exist";
		echo "<br><a href='modificarGrupo.php'>Try again</a>";
	}
}
?>