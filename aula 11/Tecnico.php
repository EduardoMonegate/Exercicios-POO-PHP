<?php
    require_once 'Aluno.php';
class Tecnico extends Aluno{

    private $registroProficional;
    

    public function setRegistro($r){
        $this->registroProficional=$r;
    }
    public function getRegistro(){
        return $this->registroProficional;
    }

  

    public function praticar(){
        echo "Praticando!";
    }
   
}







?>