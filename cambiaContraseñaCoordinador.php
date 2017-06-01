<?php
session_start();
	 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['clase']=='c') {
	require_once("conectar.php");
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$query="select * from carrera";
	$resultado=$conexion -> query($query);
} 
else {
	echo "Acces denied.<br>";
	echo "<br><a href='salir.php'>Login</a>";
	exit;
}
?>