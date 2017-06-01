<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
require_once('clases.php');
    $unidad=$_POST['unidad'];
    $calificacion=$_POST['calif'];
    $numero=$_POST['numero'];
    $id=$_POST['id'];
    $usuarios=new Usuarios;
    $actualizar=$usuarios->modificarCalificacion($id, $unidad, $calificacion, $numero);
echo json_encode($actualizar);
}
?>