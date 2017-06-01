<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
session_start();
	 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['clase']=='c') {
	require_once("conectar.php");
	if(isset($_GET['id'])){
    $id=$_GET['id'];
	$_SESSION['id']=$id;
	}
	else{
    $id=$_SESSION['id'];
	}
	$conexion = new mysqli("localhost", "root", "zero", "ingles");
	$sql="select * from horario where IdGrupo='$id'";
	$result = $conexion -> query($sql);
    $row = mysqli_fetch_array($result);
} 
else {
	echo "Acces denied.<br>";
	echo "<br><a href='salir.php'>Login</a>";
	exit;
}
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
					<font id="titulo2">Add Group</font>
      </td>
	  	<td><font id="titulo3"> TECNOL&Oacute;GICO NACIONAL <br> DE M&Eacute;XICO</font><!--img src="img/dgest.gif" /--> </td>
		  <!--img src="/dgest.gif" / > </td -->
  	</tr>
  </tbody></table>
            
			 <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    
                    
                </div>
                <div class="collapse  navbar-collapse" id="bs-activacion">
                    <ul class="nav navbar-nav" >
                        
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header>
    <section class="container">
		<form action="actualizaH.php" method="post">
        <div id="contenido">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Group<i class="fa fa-user fa-2x pull-right"></i><br><small><?php echo $id; ?></small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form id="horario" action="" class="form-horizontal reducido" method="post">
                                <div class="form-group">
                                    <h6>Moonday</h6>
                                    <label for="lunes" class="sr-only">
                                        Moonday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="lunes" name="lunes" class="form-control" style="width: 250px" value="<?php echo $row['Lunes']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Tuesday</h6>
                                    <label for="martes" class="sr-only">
                                        Tuesday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="martes" name="martes" class="form-control" style="width: 250px" value="<?php echo $row['Martes']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Wednesday</h6>
                                    <label for="miercoles" class="sr-only">
                                        Wednesday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="miercoles" name="miercoles" class="form-control" style="width: 250px" value="<?php echo $row['Miercoles']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Thursday</h6>
                                    <label for="jueves" class="sr-only">
                                        Thursday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="jueves" name="jueves" class="form-control" style="width: 250px" value="<?php echo $row['Jueves']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Friday</h6>
                                    <label for="viernes" class="sr-only">
                                        Friday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="viernes" name="viernes" class="form-control" style="width: 250px" value="<?php echo $row['Viernes']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Saturday</h6>
                                    <label for="sabado" class="sr-only">
                                        Saturday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="sabado" name="sabado" class="form-control" style="width: 250px" value="<?php echo $row['Sabado']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6>Sunday</h6>
                                    <label for="domingo" class="sr-only">
                                        Sunday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="domingo" name="domingo" class="form-control" style="width: 250px" value="<?php echo $row['Domingo']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-offset-4 col-sm-4">
                                        <button id="SaveHorario" class="btn btn-primary btn-block btn-lg">
                                            <i class="fa fa-floppy-o"></i>&nbsp;&nbsp;
                                            Save
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