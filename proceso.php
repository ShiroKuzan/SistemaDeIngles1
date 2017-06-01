<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
$clase=$_GET['clase'];
if($clase==1){
    header("Location:login.php?usuario=Coordinator&clase=c&numero=ID");
}
elseif($clase==2){
    header("Location:login.php?usuario=Professor&clase=p&numero=RFC");
}
else{
    header("Location:login.php?usuario=Student&clase=s&numero=Control Number");
}
}
?>