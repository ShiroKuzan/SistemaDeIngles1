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
    <br>
    <section class="container">
		<form id="horario" action="agregaH.php" method="post">
        <div id="contenido">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Group: <?php echo $_SESSION['grupo']; ?><i class="fa fa-user fa-2x pull-right"></i><br><small>Add a new schedule</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="" class="form-horizontal reducido" method="post">
                                <div class="form-group">
                                    <h6>Moonday</h6>
                                    <label for="lunes" class="sr-only">
                                        Moonday
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-rebel"></i>
                                        </span>
                                        <input type="text" id="lunesInicio" name="lunesInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="lunesFinal" name="lunesFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="martesInicio" name="martesInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="martesFinal" name="martesFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="miercolesInicio" name="miercolesInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="miercolesFinal" name="miercolesFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="juevesInicio" name="juevesInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="juevesFinal" name="juevesFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="viernesInicio" name="viernesInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="viernesFinal" name="viernesFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="sabadoInicio" name="sabadoInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="sabadoFinal" name="sabadoFinal" class="form-control" style="width: 250px" placeholder ="End">
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
                                        <input type="text" id="domingoInicio" name="domingoInicio" class="form-control" style="width: 250px" placeholder ="Begin">
                                        <input type="text" id="domingoFinal" name="domingoFinal" class="form-control" style="width: 250px" placeholder ="End">
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