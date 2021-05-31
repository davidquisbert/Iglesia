<?php

class Db_Object{
    public static function TraerTodoJoin(){
        return static::Query("Select * from ".static::$db_tabla." inner join persona on id_persona=id LIMIT 10" );
    }
    public static function TraerTodo(){
        return static::Query("Select * from ".static::$db_tabla);
    }
    public static function TraerTodoFiltrado(){
        return static::Query("Select * from ".static::$db_tabla." where estado=1");
    }
    public static function TraerBusquedaPaciente($dato){
        $query="select p.id,CONCAT(p.nombre,' ',p.apellido_paterno,' ',p.apellido_materno) as nombre_c, id_seguro,s.nombre from persona p join paciente on id_persona=id join seguro s on s.id=id_seguro having nombre_c like '%$dato%' order by p.id limit 10";
        //echo $query;
        return static::QueryArray($query);
    }
    public static function TraerPorId($id){
        $resultado=static::Query("Select * from ".static::$db_tabla." where id=$id");
        return !empty($resultado)?array_shift($resultado):false;
    }
    public static function TraerPorIdJoin($id){
        $resultado=static::Query("Select * from ".static::$db_tabla." inner join persona on id_persona=id where id=$id");
        return !empty($resultado)?array_shift($resultado):false;
    }
    public static function Query($q){
        global $database;
        $result=$database->Consulta($q);
        $array_Objeto=array();
        while($row=mysqli_fetch_array($result)){
            $array_Objeto[]=static::instanciacion($row);
        }

        return $array_Objeto;
    }
    public static function QueryArray($q){
        global $database;
        $result=$database->Consulta($q);
        //$array_Objeto=mysqli_fetch_array($result);

        return $result;
    }
    public static function instanciacion($registro){
        $llamando=get_called_class();
        $objeto=new $llamando;
        foreach($registro as $atributo=>$valor){
            if($objeto->tiene_atributos($atributo)){
                $objeto->$atributo=$valor;
            }
        }
        return $objeto;
    }
    private function tiene_atributos($atributo){
        $prop=get_object_vars($this);
        return array_key_exists($atributo,$prop);
    }


}

?>