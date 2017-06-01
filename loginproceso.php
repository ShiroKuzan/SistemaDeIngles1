<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

require_once("conectar.php");
	$control=$_POST['control'];
	$password=$_POST['password'];
    $clase=$_POST['clase'];
	
	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
    //print_r($login);
    $login=$usuarios->buscarUsuario($control,sha1($password),$clase);
    if(!($login['error'])){
        //hacer debug var_dump($login);
        if($clase=='c'){
    	$_SESSION['loggedin']=true;
		$_SESSION['control']=$control;
		$_SESSION['clase']='c';
    	header("Location:mainCoordinador.php");
		}
		elseif($clase=='p'){
			$_SESSION['loggedin']=true;
			$_SESSION['control']=$control;
			$_SESSION['clase']='p';
			header("Location:mainProfesor.php");
		}
		else{
			$_SESSION['loggedin']=true;
			$_SESSION['control']=$control;
			$_SESSION['clase']='s';
			header("Location:mainAlumno.php");
		}
	}
	else{
		echo "Failed username or password.";
    	echo "<br><a href='index.php'>Try again</a>";
	}
}
?>