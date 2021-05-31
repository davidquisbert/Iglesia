<?php

class Session{
    public $email;
    public $id_persona;
    public $contrasena;
    private $signed_in=false;
    public $mensaje;
    public function __construct(){
        session_start();
        $this->validar_Login();
        //$this->verificar_Mensaje();
    }

    public function Login($user){
        if($user){
            $this->email=$_SESSION['email']=$user->email;
            $this->contrasena=$_SESSION['contrasena']=$user->contrasena;
            $this->signed_in=true;
        }
    }

    public function Logout(){
        unset($_SESSION['email']);
        unset($_SESSION['contrasena']);

        unset($this->email);
        unset($this->contrasena);

        $this->signed_in=false;
    }
    public function is_signed_in(){
        return $this->signed_in;
    }

    public function validar_Login(){
        if(isset($_SESSION['email'])){
            $this->id_usuario=$_SESSION['email'];
            $this->id_persona=$_SESSION['contrasena'];
            $this->signed_in=true;
        }else{
            unset($this->email);
            unset($this->contrasena);

            $this->signed_in=false;
        }
    }
    public function mensaje($msj=""){
        if(!empty($msj)){
            $_SESSION['mensaje']=$msj;
        }else{
            return $this->mensaje;
        }
    }

    private function verificar_Mensaje(){
        if(isset($_SESSION['id_usuario'])){
            $this->mensaje=$_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }else{
            $this->mensaje="";
        }
    }
}
$session = new Session();