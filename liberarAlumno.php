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
					<font id="titulo2">Release Student</font>
      </td>
	  	<td><font id="titulo3"> TECNOL&Oacute;GICO NACIONAL <br> DE M&Eacute;XICO</font><!--img src="img/dgest.gif" /--> </td>
		  <!--img src="/dgest.gif" / > </td -->
  	</tr>
  </tbody></table>
            
			 <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a href="mainCoordinador.php" class="navbar-brand">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="agregarEstudiantes.php">Students</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="agregarProfesores.php">Profesors</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="agregarGrupo.php">Group</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="agregarCarrera.php">Career</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Print<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="imprimirAlumnos.php">Students</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="imprimirCalificaciones.php">Grades</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="imprimirProfesores.php">Profesors</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="imprimirAsistencia.php">Attendance</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="imprimirHorario.php">Schedule</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="imprimirGrupo">Group</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modify<span class="caret"></span></a>
                            <!--anidar otra lista que es el submenu-->
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="modificarCalificacion.php">Grades</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="modificarHorario.php">Schedule</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="modificarAlumno.php">Student</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="modificarProfesor.php">Professor</a>
                                </li>
								<li role="separator" class="divider"></li>
								<li>
                                    <a href="seleccionaGM.php">Group</a>
                                </li>
                            </ul>
                        </li>
						<li class="active">
                            <a href="liberarAlumno.php" role="button" aria-haspopup="true" aria-expanded="false">Release Student</a>
                        </li>
                        <li>
                            <a href="registrarColocacion.php" role="button" aria-haspopup="true" aria-expanded="false">Register Colocation Grades</a>
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
                                    <a href="mostrarAlumnos.php">Show Students</a>
                                </li>
								<li role="separator" class="divider"></li>
                                <li>
                                    <a href="cambiaContraseñaCoordinador.php">Change Password</a>
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
		<form method="post" action="liberar.php">
        <div id="contenido">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Student<i class="fa fa-user fa-2x pull-right"></i><br><small>Release student</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form id="liberarAlumno" action="crearHorario.php" class="form-horizontal reducido" method="post">
                                <div class="form-group">
                                    <label for="numeroControl" class="sr-only">
                                        Control Number
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" required id="numeroControl" name="numeroControl" class="form-control" placeholder ="Control Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comentario" class="sr-only">
                                        Comment
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
										<input type="hidden" id="estado" name="estado" class="form-control" value="L">
                                        <input type="text" required id="comentario" name="comentario" class="form-control" placeholder ="Comment">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-4">
                                        <button id="liberar" class="btn btn-primary btn-block btn-lg">
                                            <i class="fa fa-floppy-o"></i>&nbsp;&nbsp;
                                            Update
                                        </button>
                                    </div>
                                 </div>
                            </form>
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