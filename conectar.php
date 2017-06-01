<?php
define('SERVIDOR','31.170.166.68');
define('USUARIO','u471766250_siiro');
define('PASSWORD','greenday64');
define('BASEDATOS','u471766250_ingle');
define('TIPO','mysqli');

require_once('lib/adodb/adodb.inc.php');
abstract class Conectar{
    private $conn;
    private $servidor=SERVIDOR;
    private $usuario=USUARIO;
    private $password=PASSWORD;
    private $basedatos=BASEDATOS;
    private $tipo=TIPO;
    
    public function coneccion(){
        try{
        //seleccionamos el driver
        if(!$this->conn=NewADOConnection($this->tipo))
        throw new exception('Error al crear el driver');
        //aqui realizamos la coneccion
        elseif(!$this->conn->Connect($this->servidor,$this->usuario,$this->password,$this->basedatos))
        throw new exception('Error al crear la conexion');
        return $this->conn;
        }
    catch(Exception $e){
            ?>
            <h1>A ocurrido el siguiente error: &nbsp;<?php echo $e->getMessage().'/Linea:'.
            $e->getLine();?>&nbsp;:)</h1><?php
        }
    }
}
 ?>
