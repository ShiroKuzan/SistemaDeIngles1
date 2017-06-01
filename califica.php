<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['clase']=='p') {
	require_once("conectar.php");
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$grupo=$_POST['seleccionaGrupo'];
	$query="select * from cursos where IdGrupo='$grupo'";
	$resultado=$conexion -> query($query);
	if(($row=mysqli_fetch_array($resultado))!=NULL)
	{
		
	}
	else{
		header("Location:calificarGrupo.php");
	}
} 
else {
	echo "Acces denied.<br>";
	echo "<br><a href='salir.php'>Login</a>";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>English Control System</title>
    <link rel="stylesheet" href="css/SistemaDeIngles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Layer.css">
    <link rel="stylesheet" href="css/bootstrapValidator.min.css">
</head>

<body>
    <header>
        <div class="container" id="cont"><!--la clase container es para que el div agarre el 90% de ancho mientras el container fluid usa el 100%-->
           <table width="800" align="center">
  	<tbody><tr>
      <td><img src="http://sii.itdelicias.edu.mx/img/sep.gif"> </td>
	  	<td>
					<font id="titulo1">English Control System</font>
					<br>
					<font id="titulo2">Instituto Tecnol&oacute;gico de Delicias</font>
					<br>
					<font id="titulo2">Professor's Menu</font>
      </td>
	  	<td><font id="titulo3"> TECNOL&Oacute;GICO NACIONAL <br> DE M&Eacute;XICO</font><!--img src="img/dgest.gif" /--> </td>
		  <!--img src="/dgest.gif" / > </td -->
  	</tr>
  </tbody></table>
            
			 <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <i class="fa fa-home 2x"></i>
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-activacion" aria-expanded="false">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse  navbar-collapse" id="bs-activacion">
                   <ul class="nav navbar-nav" >
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grades<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="calificarGrupo.php">Grade Group</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="modificarCalificacion.php">Show Grades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Print<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="imprimirAsistencia.php">Attendance</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="imprimirCalificaciones.php">Grades</a>
                                </li>
                            </ul>
                        </li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utility<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="mostrarGrupo.php">Show Group</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="cambiaContraseñaProfesor.php">Change Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
				   <ul class="nav navbar-nav navbar-right">
                        <li><a href="salir.php">Close</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header>
    <br>
    <section class="container">
		<form id="califica" action="califica.php" class="form-horizontal reducido" method="post">
        <div id="contenido">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Grade<i class="fa fa-user fa-2x pull-right"></i><br><small>Grade a group</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                                <div class="form-group">
                                    <label for="numeroControl" class="sr-only">
                                        Control Number
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="numeroControl" name="numeroControl" class="form-control" readonly value="<?php echo $row['NumeroControl']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nombre" class="sr-only">
                                        Name
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-meh-o"></i>
                                        </span>
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder ="Name" disabled="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="calificacion" class="sr-only">
                                        Grade
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-meh-o"></i>
                                        </span>
                                        <input type="text" id="calificacion" name="calificacion" class="form-control" placeholder ="Grade" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-4">
                                        <button id="SaveQualificate" class="btn btn-primary btn-block btn-lg">
                                            <i class="fa fa-arrow-right"></i>&nbsp;&nbsp;
                                            Next
                                        </button>
                                    </div>
                                 </div>
                        </div>
                        <div class="panel-footer">
                            <h6>
                                Have a good day <i class="fa fa-smile-o"></i>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</form>
    </section>
    <footer>
        <div class="container">
			<em>Copy Rights, English Control System &copy</em> 
		</div>
    </footer>
    
    
    
    
    
    
    
    <script src="js/jquery/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script><!--esto es lo necesario siempre que usemos el bootstrap-->
    <!--<script src="js/login.js"></script>-->
    <script src="js/sha1.min.js"></script>
    <!--este no se necesita<script src="js/loginV2.js"></script>-->
    <script src="js/bootstrapValidator.min.js"></script>
	<script src="js/validarSistemaDeIngles.js"></script>
    <!--este no se necesita<script src="js/validarLogin.js"></script>-->
</body>

</html>