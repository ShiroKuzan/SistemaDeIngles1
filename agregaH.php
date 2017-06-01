<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();

    require_once("conectar.php");

	$id=$_SESSION['grupo'];
    if($_POST['lunesInicio']!=null && $_POST['lunesFinal']!=null){
    $lunes=$_POST['lunesInicio']." to ".$_POST['lunesFinal'];
    }
    else{
        $lunes="";
    }
    if($_POST['martesInicio']!=null && $_POST['martesFinal']!=null){
    $martes=$_POST['martesInicio']." to ".$_POST['martesFinal'];
    }
    else{
        $martes="";
    }
    if($_POST['miercolesInicio']!=null && $_POST['miercolesFinal']!=null){
    $miercoles=$_POST['miercolesInicio']." to ".$_POST['miercolesFinal'];
    }
    else{
        $miercoles="";
    }
    if($_POST['juevesInicio']!=null && $_POST['juevesFinal']!=null){
    $jueves=$_POST['juevesInicio']." to ".$_POST['juevesFinal'];
    }
    else{
        $jueves="";
    }
    if($_POST['viernesInicio']!=null && $_POST['viernesFinal']!=null){
    $viernes=$_POST['viernesInicio']." to ".$_POST['viernesFinal'];
    }
    else{
        $viernes="";
    }
    if($_POST['sabadoInicio']!=null && $_POST['sabadoFinal']!=null){
    $sabado=$_POST['sabadoInicio']." to ".$_POST['sabadoFinal'];
    }
    else{
        $sabado="";
    }
    if($_POST['domingoInicio']!=null && $_POST['domingoFinal']!=null){
    $domingo=$_POST['domingoInicio']." to ".$_POST['domingoFinal'];
    }
    else{
        $domingo="";
    }

	require_once('clases.php');
    $usuarios=new Usuarios;
    $login=new Usuarios;
	$login=$usuarios->agregarHorario($id,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo);
	if($login['exito']){
		header("Location:modificarGrupo.php");
	}
	else{
		echo "Error";
		echo "<br><a href='agregarHorario.php'>Try again</a>";
	}
}
?>