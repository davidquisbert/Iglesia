<?php
    class persona extends Db_Object{
        public static $db_tabla="persona";
        public static $db_campos_tabla=array('nombres','apellidos','ci','sexo','fechaNacimiento','telefono');
        public $id;
        public $nombres;
        public $apellidos;
        public $ci;
        public $sexo;
        public $fechaNacimiento;
        public $telefono;

        private function Propiedades(){
            $propiedades=array();
            foreach(self::$db_campos_tabla as $campo){
                if(property_exists($this,$campo)){
                    $propiedades[$campo]=$this->$campo;
                }
            }
            return $propiedades;
        }
        public function BuscarPaciente($dato){
            global $database;
            $query="select id, CONCAT(nombre,' ',apellido_paterno,' ',apellido_materno) as nombre_completo 
            from persona join paciente on id_persona=id having nombre_completo like '%".$dato."%'";
            echo $query;
            return $database->Consulta($query);
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
            //echo $sql;
            if($database->Consulta($sql)){
                return $this->id=$database->UltimaId();
            }else{
                return 0;
            }
    
        }

        public function Update(){//update normal
            global $database;
            $propiedades=$this->Propiedades();
            $propiedades_pares=array();

            foreach($propiedades as $key=>$value){
                $propiedades_pares[]="{$key}='{$value}'";
            }
            //print_r($propiedades_pares);
            $sql = "UPDATE ".self::$db_tabla." SET ";
            $sql.=implode(",",$propiedades_pares);
            $sql.=" WHERE id= ".$database->Formato_String($this->id);
            //echo $sql;
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
            $sql.="d_e_l=1";
            $sql.=" WHERE id= ".$database->Formato_String($this->id);
            echo $sql;
            $database->Consulta($sql);

            return (mysqli_affected_rows($database->connection)==1)?true:false;
        }
    }
?>