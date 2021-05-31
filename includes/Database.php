<?php
require_once ("new_config.php");
class Database{
    public $connection;

    function __construct(){
        $this->Conectar();
    }

    public function Conectar(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->connection->connect_errno){
            die("Error de conexion".$this->connection->connect_errno);
        }
    }

    public function Consulta($sql){
        $resultado=$this->connection->query($sql);
        $this->ConfirmarConsulta($resultado);
        return $resultado;
    }
    private function ConfirmarConsulta($resultado){
        if(!$resultado){
            die("Consulta fallida".$this->connection->error);
        }
    }

    public function Formato_String($string){
        return $consulta_Formateada=$this->connection->real_escape_string($string);
    }
    public function UltimaId(){
        return mysqli_insert_id($this->connection);
    }

}
$database = new Database();