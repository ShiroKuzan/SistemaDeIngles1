<?php
session_start();
	 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['clase']=='c' || $_SESSION['clase']=='p')) {
	require_once("conectar.php");
	if(isset($_GET['id'])){
    $id=$_GET['id'];
	$_SESSION['id']=$id;
	}
	else{
    $id=$_SESSION['id'];
	}
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from cursos where IdGrupo='$id'";
	$result = $conexion -> query($sql);
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
                                <li class="active">
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
		<label>Group <?php echo $id; ?></label>
        <br>
		<div class="row table-responsive">
                     <table class="display" id="TablaAlumnos"><!--table class="table table-striped"-->
                        <thead>
                                <tr>
                                        <th>Control Number</th>
                                        <th>Unity 1</th>
                                        <th>Unity 2</th>
                                        <th>Unity 3</th>
                                        <th>Unity 4</th>
                                        <th>Unity 5</th>
                                        <th>Unity 6</th>
                                        <th>Unity 7</th>
                                        <th>Unity 8</th>
                                        <th>Unity 9</th>
                                        <th>Unity 10</th>
                                        <!--<th style="text-align: center;">Modificar</th>-->
                                </tr>
                        </thead>
                        
                         <tbody>
                                <?php while($row = mysqli_fetch_array($result)){?>
                                <tr>
                                   <td><?php echo $row['NumeroControl'];?></td>     
                                   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad1" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad1'];?>"><?php echo $row['Unidad1'];?></a></td>
                                   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad2" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad2'];?>"><?php echo $row['Unidad2'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad3" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad3'];?>"><?php echo $row['Unidad3'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad4" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad4'];?>"><?php echo $row['Unidad4'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad5" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad5'];?>"><?php echo $row['Unidad5'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad6" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad6'];?>"><?php echo $row['Unidad6'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad7" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad7'];?>"><?php echo $row['Unidad7'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad8" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad8'];?>"><?php echo $row['Unidad8'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad9" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad9'];?>"><?php echo $row['Unidad9'];?></a></td>
								   <td><a class="btno btn nolink" href="#calificacion" data-toggle="modal" data-id="<?php echo $id; ?>" data-unidad="Unidad10" data-numero="<?php echo $row['NumeroControl']; ?>" data-calif="<?php echo $row['Unidad10'];?>"><?php echo $row['Unidad10'];?></a></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                     </table>
                </div>
        <br>
        <br>
    </section>
    <div class="modal fade" id="calificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Introduce a new grade</h4>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal reducido" method="post" enctype="multipart/form-data" id="nuevaCalificacion">
        <div class="form-group">
            <label for="grade" class="sr-only">
                Grade
            </label>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-rebel"></i></span>
			<input type="hidden" id="id" name="id" class="form-control" placeholder="ID">
            <input type="hidden" id="unidad" name="unidad" class="form-control" placeholder="Unity">
            <input type="hidden" id="numero" name="numero" class="form-control" placeholder="Number">
            <input type="text" id="calif" name="calif" class="form-control" placeholder="Grade">
            </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="guardar">Save</button>
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
           $("#calificacion").on("shown.bs.modal", function(e){
            e.preventDefault();
            var datos = $(e.relatedTarget);
            var unidad = datos.data('unidad');
            var calif = datos.data('calif');
			var id = datos.data('id');
            var numero = datos.data('numero');
            $("#unidad").val(unidad);
            $("#calif").val(calif);
			$("#id").val(id);
            $("#numero").val(numero);
           });
        $('#guardar').click(function(){
            var datos=$('#nuevaCalificacion').serialize();//crea la cadena de datos del formulario
            $.ajax({
                url:'./actualizaC.php',
                data:datos,
                type:'POST',
                dataType:'json',
                success:function(resultado){
                    if(resultado.exito){
                        $('#calificacion').modal('hide');
                        location.href="modificaC.php";
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