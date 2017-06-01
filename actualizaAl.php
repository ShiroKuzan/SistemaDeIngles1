<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
require_once('clases.php');
    $id=$_POST['id'];
    $usuarios=new Usuarios;
    $actualizar=$usuarios->desactivaAlumno($id);
echo json_encode($actualizar);
}
?>