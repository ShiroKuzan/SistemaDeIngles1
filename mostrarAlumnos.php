<?php
session_start();
	 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['clase']=='c') {
 
} 
else {
	echo "Acces denied.<br>";
	echo "<br><a href='salir.php'>Login</a>";

	exit;
}
?>