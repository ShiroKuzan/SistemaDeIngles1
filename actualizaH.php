<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$id=$_SESSION['id'];
    if($_POST['lunes']!=null){
    $lunes=$_POST['lunes'];
    }
    else{
        $lunes="";
    }
    if($_POST['martes']!=null){
    $martes=$_POST['martes'];
    }
    else{
        $martes="";
    }
    if($_POST['miercoles']!=null){
    $miercoles=$_POST['miercoles'];
    }
    else{
        $miercoles="";
    }
    if($_POST['jueves']!=null){
    $jueves=$_POST['jueves'];
    }
    else{
        $jueves="";
    }
    if($_POST['viernes']!=null){
    $viernes=$_POST['viernes'];
    }
    else{
        $viernes="";
    }
    if($_POST['sabado']!=null){
    $sabado=$_POST['sabado'];
    }
    else{
        $sabado="";
    }
    if($_POST['domingo']!=null){
    $domingo=$_POST['domingo'];
    }
    else{
        $domingo="";
    }

	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$login=$usuarios->modificarHorario($id,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo);
	if($login['exito']){
		header("Location:modificarHorario.php");
	}
	else{
		echo "Error";
		echo "<br><a href='modificaH.php'>Try again</a>";
	}
}
?>