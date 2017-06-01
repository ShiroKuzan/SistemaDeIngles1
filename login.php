<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
$clase=$_GET['clase'];
$mUsuario=$_GET['usuario'];
$mNumero=$_GET['numero'];
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
					<font id="titulo2">Home</font>
      </td>
	  	<td><font id="titulo3"> TECNOL&Oacute;GICO NACIONAL <br> DE M&Eacute;XICO</font><!--img src="img/dgest.gif" /--> </td>
		  <!--img src="/dgest.gif" / > </td -->
  	</tr>
  </tbody></table>
            
			
        </div>
    </header>
    <section class="container">
        <br>
        <br>
        <br>
		<form action="loginproceso.php" method="POST">
        <div id="contenido">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Welcome <i class="fa fa-key fa-2x pull-right"></i><br><small><?php echo $mUsuario; ?></small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="" class="form-horizontal" method="POST" id="login">
                                <div class="form-group">
                                    <label for="usuario" class="sr-only">
                                        <?php echo $mNumero; ?>
                                    </label>
                                    <input type="text" id="control" name="control" class="form-control" placeholder="<?php echo $mNumero; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">
                                        Password
                                    </label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
								<input type="hidden" id="clase" name="clase" value="<?php echo $clase; ?>" >
                                <input class="btn btn-primary btn-lg pull-right" type="submit" id="btn" value="Login" />
                                <a class="btn btn-default btn-lg pull-left" type="submit" href="index.php" id="btn2" value="Cancel"> Cancel</a>
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
    <!--este no se necesita<script src="js/validarLogin.js"></script>-->
	
</body>

</html>