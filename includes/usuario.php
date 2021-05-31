<?php
class usuario extends Db_Object{
    public static $db_tabla="usuario";
    public static $db_campos_tabla=array('email','contrasena','privilegio','estado','id_persona');
    public $id;
    public $email;
    public $contrasena;
    public $privilegio;
    public $estado;
    public $id_persona;


    public static function Verificar_Usuario($username,$pass){
        global $database;
        $username=$database->Formato_String($username);
        $pass=$database->Formato_String($pass);
        $pass=MD5($pass);
        $sql="Select * from ".self::$db_tabla." where ";
        $sql.="email='{$username}' and ";
        $sql.="contrasena='{$pass}' and id_estado=2 and privilegio=2 ";
        $sql.="LIMIT 1";
        $resultado=self::Query($sql);
        return !empty($resultado)?array_shift($resultado):false;
    }

    private function Propiedades(){
        $propiedades=array();
        foreach(self::$db_campos_tabla as $campo){
            if(property_exists($this,$campo)){
                $propiedades[$campo]=$this->$campo;
            }
        }
        return $propiedades;
    }
    //CRUD
    public function Save(){
        return isset($this->id)?$this->Update():$this->Create();
    }
    public function Create(){
        global $database;
        /*$sql="Insert into ".self::$db_tabla."(nombre,apellido,username,pass,confpass)";
        $sql.="VALUES('";
        $sql.=$database->Formato_String($this->nombre)."', '";
        $sql.=$database->Formato_String($this->apellido)."', '";
        $sql.=$database->Formato_String($this->username)."', '";
        $sql.=$database->Formato_String($this->password)."', '";
        $sql.=$database->Formato_String($this->confpass)."')";
        */
        $propiedades=$this->Propiedades();

        $sql = "INSERT INTO ".self::$db_tabla."(".implode(",",array_keys($propiedades)).")";
        $sql.=" VALUES ('".implode("','",array_values($propiedades))."')";
        echo $sql;
        if($database->Consulta($sql)){
            $this->id=$database->UltimaId();
        }else{
            return false;
        }

    }

    public function Update(){//update contraseña
        global $database;
        $propiedades=$this->Propiedades();
        $propiedades_pares=array();

        foreach($propiedades as $key=>$value){
            $propiedades_pares[]="{$key}='{$value}'";
        }
        //print_r($propiedades_pares);
        $sql = "UPDATE ".self::$db_tabla." SET ";
        $sql .="password='".$this->password."'";
        $sql.=" WHERE id= ".$database->Formato_String($this->id);
        echo $sql;
        $database->Consulta($sql);

        return (mysqli_affected_rows($database->connection)==1)?true:false;
    }

    /*public function delete(){
        global $database;
        $propiedades=$this->Propiedades();
        $propiedades_pares=array();

        foreach($propiedades as $key=>$value){
            $propiedades_pares[]="{$key}='{$value}'";
        }
        //print_r($propiedades_pares);
        $sql = "DELETE FROM ".self::$db_tabla;
        $sql.=" WHERE id= ".$database->Formato_String($this->id);
        $sql.=" LIMIT 1";
        echo $sql;
        $database->Consulta($sql);

        return (mysqli_affected_rows($database->connection)==1)?true:false;
    }*/
    public function delete(){
        global $database;
        $propiedades=$this->Propiedades();
        $propiedades_pares=array();

        foreach($propiedades as $key=>$value){
            $propiedades_pares[]="{$key}='{$value}'";
        }
        //print_r($propiedades_pares);
        $sql = "UPDATE ".self::$db_tabla." SET ";
        $sql.="estado=0";
        $sql.=" WHERE id= ".$database->Formato_String($this->id);
        echo $sql;
        $database->Consulta($sql);

        return (mysqli_affected_rows($database->connection)==1)?true:false;
    }
}
?>