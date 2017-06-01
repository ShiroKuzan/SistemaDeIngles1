<?php
session_start();
	 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['clase']=='c') {
	require_once("conectar.php");
	if(isset($_GET['grupo'])){
	$id=$_GET['grupo'];
	}
	else{
	$id=$_SESSION['grupo'];
	}
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from grupo where IdGrupo='$id'";
	$result = $conexion -> query($sql);
	$row = mysqli_fetch_array($result);
	$query="select Nombre from profesor inner join grupo where IdGrupo='$id' and grupo.RFC=profesor.RFC";
	$resultado = $conexion -> query($query);
	$rows=mysqli_fetch_array($resultado);
	$consulta=$conexion -> query("select * from alumno inner join cursos where alumno.NumeroControl=cursos.NumeroControl and cursos.IdGrupo='$id'");
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
	<link rel="stylesheet" href="css/datatables.min.css">
	<link rel="stylesheet" href="css/boton.css">
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
					<font id="titulo2">Group</font>
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
								<li class="active">
                                    <a href="seleccionaGM.php">Group</a>
                                </li>
                            </ul>
                        </li>
						<li>
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
    <section class="container">
		<label>Group's ID:<h6><?php echo $row['IdGrupo']; ?></h6></label>&nbsp;&nbsp;
		<label>Professor:<h6><?php echo $rows['Nombre']; ?></h6></label>&nbsp;&nbsp;
		<label>Level:<h6><?php echo $row['Nivel']; ?></h6></label>&nbsp;&nbsp;
		<label>Classroom:<h6><?php echo $row['Aula']; ?></h6></label>&nbsp;&nbsp;
		<label>Period:<h6><?php echo $row['InicioPeriodo']." to ".$row['FinPeriodo']; ?></h6></label>&nbsp;&nbsp;
		<label>Modality:<h6><?php echo $row['Modalidad']; ?></h6></label>&nbsp;&nbsp;
		<a class="btn btn-primary" href="#desactivar" data-toggle="modal" data-id="<?php echo $id; ?>">Deactivate</a>
        <br>
		<br>
		<form action="agregaEG.php" method="POST">
			<label>Add Student</label>
            <input type="text" id="number" name="number" placeholder="Control Number">
			<input type="hidden" id="grupo" name="grupo" value="<?php echo $id; ?>">
            <button id="agregar" class="btn btn-primary btn-sm">
            <i class="fa fa-floppy-o"></i>&nbsp;&nbsp;
            Add
            </button>
        </form>
		<br>
		<br>
		<div class="row table-responsive">
                     <table class="display" id="TablaAlumnos"><!--table class="table table-striped"-->
                        <thead>
                                <tr>
                                        <th>Control Number</th>
                                        <th>Name</th>
                                        <th>Career</th>
										<th>Delete?</th>
                                        <!--<th style="text-align: center;">Modificar</th>-->
                                </tr>
                        </thead>
                        
                         <tbody>
                                <?php while($ron=mysqli_fetch_array($consulta)){?>
                                <tr>
                                   <td><?php echo $ron['NumeroControl'];?></td>     
                                   <td><?php echo $ron['Nombre'];?></td>
                                   <td><?php echo $ron['Carrera'];?></td>
								   <td><a class="btn btn-danger btn-sm" href="eliminaS.php?id=<?php echo $id; ?>&numero=<?php echo $ron['NumeroControl'];?>"><i class="fa fa-close"></i></a></td>
                                   <!--<td style="text-align: center;"></td>-->
                                </tr>
                                <?php } ?>
                        </tbody>
                     </table>
                </div>
        <br>
        <br>
    </section>
	<div class="modal fade" id="desactivar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alert!</h4>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal reducido" method="post" enctype="multipart/form-data" id="actualizar">
        <div class="form-group">
            <label for="grade" class="sr-only">
                Are you sure you want to deactivate this group?
            </label>
            <div class="input-group">
            <label>
                <h3><strong>Are you sure you want to deactivate this group?</strong></h3>
				<input type="hidden" id="id" name="id" placeholder="ID">
            </label>
            </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="desactiva">Yes</button>
      </div>
    </div>
  </div>
</div>
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
	<script src="js/datatables.min.js"></script>
	<script type="text/javascript" src="js/funcion.js"></script>
    <!--este no se necesita<script src="js/validarLogin.js"></script>-->
	<script>
        $(document).ready(function(){
           $("#desactivar").on("shown.bs.modal", function(e){
            e.preventDefault();
            var datos = $(e.relatedTarget);
            var id = datos.data('id');
			$("#id").val(id);
           });
        $('#desactiva').click(function(){
            var datos=$('#actualizar').serialize();//crea la cadena de datos del formulario
            $.ajax({
                url:'./actualizaG.php',
                data:datos,
                type:'POST',
                dataType:'json',
                success:function(resultado){
                    if(resultado.exito){
                        $('#desactivar').modal('hide');
                        location.href="seleccionaGM.php";
                    }
                    },
                error:function(variable){
                    alert('ERROR'+variable.responseText);
                }
                
                
                });
            });
            });
    </script>
	
</body>

</html>