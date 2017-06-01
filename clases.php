<?php
if(empty($_POST || $_GET)){
    header("Location:salir.php");
}
else{
require_once('conectar.php');
class Usuarios extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::coneccion();
    }
    //usar procedimiento almacenado
    public function listarUsuarios(){
        $query="call spListarUsuarios";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aUsuarios=array();
        while(!$datos->EOF){
            $aUsuarios[]=Array('usuario'=>$datos->fields('usuario'),'nombre'=>$datos->fields('nombre'),'email'=>$datos->fields('email'),'tipo'=>$datos->fields('tipo'),'fotografia'=>$datos->fields('foto'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aUsuarios;
        //echo var_dump($aUsuarios);
    }
    public function buscarUsuario($usuario, $password, $clase){
        $usuario=htmlspecialchars($usuario);
        $password=htmlspecialchars($password);
        $clase=htmlspecialchars($clase);
        if($clase=='c'){
            $query="select * from coordinador where IdCoordinador='$usuario' and Password='$password' and Activo='y'";
        }
        elseif($clase=='p'){
            $query="select * from profesor where RFC='$usuario' and Password='$password' and Activo='y'";
        }
        else{
            $query="select * from alumno where NumeroControl='$usuario' and Password='$password' and Activo='y'";
        }
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
           $aUsuario=array('error'=>false);
        }
        else{
            $aUsuario=array('error'=>true);

        }
        return $aUsuario;
    }
    
    public function agregarProfesor($usuario,$nombre,$password){
        $usuario=htmlspecialchars($usuario);
        $nombre=htmlspecialchars($nombre);
        $password=htmlspecialchars($password);
        $query="insert into profesor (RFC,Nombre,Password,Activo) values ('$usuario','$nombre','$password','y')";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function colocarAlumno($numero,$nivel){
        $numero=htmlspecialchars($numero);
        $nivel=htmlspecialchars($nivel);
        $hoy = date("Y-m-d");
        $query="insert into colocacion (NumeroControl,Nivel,Fecha) values ('$numero','$nivel','$hoy')";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function agregarAlumno($usuario,$nombre,$semestre,$password,$carrera){
        $usuario=htmlspecialchars($usuario);
        $nombre=htmlspecialchars($nombre);
        $semestre=htmlspecialchars($semestre);
        $carrera=htmlspecialchars($carrera);
        $password=htmlspecialchars($password);
        $query="insert into alumno (NumeroControl,Nombre,Semestre,Password,Activo,Carrera) values ('$usuario','$nombre','$semestre','$password','y','$carrera')";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function agregarGrupo($id,$nivel,$aula,$rfc,$inicio,$final,$modalidad){
        $id=htmlspecialchars($id);
        $nivel=htmlspecialchars($nivel);
        $aula=htmlspecialchars($aula);
        $rfc=htmlspecialchars($rfc);
        $inicio=htmlspecialchars($inicio);
        $final=htmlspecialchars($final);
        $modalidad=htmlspecialchars($modalidad);
        $query="insert into grupo (IdGrupo,Nivel,Aula,RFC,InicioPeriodo,FinPeriodo,Modalidad,Activo) values ('$id','$nivel','$aula','$rfc','$inicio','$final','$modalidad','y')";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function agregarEGrupo($id,$numero){
        $id=htmlspecialchars($id);
        $nivel=htmlspecialchars($numero);
        $query="INSERT INTO cursos SET NumeroControl='$numero', IdGrupo='$id'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function liberarAlumno($numero,$estado,$comentario){
        $numero=htmlspecialchars($numero);
        $estado=htmlspecialchars($estado);
        $comentario=htmlspecialchars($comentario);
        $query="INSERT INTO estado SET NumeroControl='$numero', Estado='$estado', Comentario='$comentario'";
        $datos=$this->db->execute($query);
        $querys="update alumno set Activo='n' where NumeroControl='$numero'";
        $datoss=$this->db->execute($querys);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function agregarHorario($id,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo){
        $id=htmlspecialchars($id);
        $lunes=htmlspecialchars($lunes);
        $martes=htmlspecialchars($martes);
        $miercoles=htmlspecialchars($miercoles);
        $jueves=htmlspecialchars($jueves);
        $viernes=htmlspecialchars($viernes);
        $sabado=htmlspecialchars($sabado);
        $domingo=htmlspecialchars($domingo);
        $query="insert into horario (IdGrupo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado,Domingo) values ('$id','$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$domingo')";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    
    
    #Metodo de modificar
    public function modificarUsuario($usuario,$nombre,$tipo,$email){
        $usuario=htmlspecialchars($usuario);
        $email=htmlspecialchars($email);
        $tipo=htmlspecialchars($tipo);
        $nombre=htmlspecialchars($nombre);
       $query="update usuarios set nombre='$nombre',tipo='$tipo',email='$email' where usuario='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function actualizarAlumno($numero,$semestre,$carrera){
        $numero=htmlspecialchars($numero);
        $semestre=htmlspecialchars($semestre);
        $carrera=htmlspecialchars($carrera);
        $query="update alumno set semestre='$semestre',carrera='$carrera' where NumeroControl='$numero'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function desactivaAlumno($numero){
        $numero=htmlspecialchars($numero);
        $query="update alumno set Activo='n' where NumeroControl='$numero'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    
    
    #Borrar
    public function eliminarUsuario($usuario){
        $usuario=htmlspecialchars($usuario);
        $query="DELETE FROM usuarios WHERE usuario='$usuario' and usuario!='admin'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        
        return $aUsuario;

    }//fin de Borrar
    
    public function buscarAlumno($usuario){
        $usuario=htmlspecialchars($usuario);
        $query="select * from alumno where NumeroControl='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
            $aUsuario=array('existe'=>true);
        }
        else
        {
            $aUsuario=array('existe'=>false);
        }
        return $aUsuario;
    }
    public function buscarProfesor($usuario){
        $usuario=htmlspecialchars($usuario);
        $query="select * from profesor where RFC='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
            $aUsuario=array('existe'=>true);
        }
        else
        {
            $aUsuario=array('existe'=>false);
        }
        return $aUsuario;
    }
    public function buscarGrupo($usuario){
        $usuario=htmlspecialchars($usuario);
        $query="select * from grupo where IdGrupo='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
            $aUsuario=array('existe'=>true);
        }
        else
        {
            $aUsuario=array('existe'=>false);
        }
        return $aUsuario;
    }
    public function buscarEGrupo($id,$numero){
        $id=htmlspecialchars($id);
        $numero=htmlspecialchars($numero);
        $query="select * from cursos where NumeroControl = '$numero' and IdGrupo='$id'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
            $aUsuario=array('existe'=>true);
        }
        else
        {
            $aUsuario=array('existe'=>false);
        }
        return $aUsuario;
    }
    public function modificarCalificacion($id, $unidad, $calificacion, $numero){
        $unidad=htmlspecialchars($unidad);
        $calificacion=htmlspecialchars($calificacion);
        $numero=htmlspecialchars($numero);
        $id=htmlspecialchars($id);
        $query="update cursos set $unidad='$calificacion' where NumeroControl='$numero' and IdGrupo='$id'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function modificarHorario($id,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo){
        $id=htmlspecialchars($id);
        $lunes=htmlspecialchars($lunes);
        $martes=htmlspecialchars($martes);
        $miercoles=htmlspecialchars($miercoles);
        $jueves=htmlspecialchars($jueves);
        $viernes=htmlspecialchars($viernes);
        $sabado=htmlspecialchars($sabado);
        $domingo=htmlspecialchars($domingo);
        $query="update horario set Lunes='$lunes', Martes='$martes', Miercoles='$miercoles', Jueves='$jueves', Viernes='$viernes', Sabado='$sabado', Domingo='$datos' where IdGrupo='$id'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
    public function modificarGrupo($id){
        $id=htmlspecialchars($id);
        $query="update grupo set Activo='n' where IdGrupo='$id'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        $aUsuario=($datos)?array('exito'=>true):array('exito'=>false);
        return $aUsuario;
    }
}
}
?>