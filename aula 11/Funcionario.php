<?php
    require_once 'Pessoa.php';
class Funcionario extends Pessoa{

    private $setor;
    private $trabalhando;

    public function setSetor($s){
        $this->setor=$s;
    }
    public function getSetor(){
        return $this->setor;
    }

    public function setTrabalhando($t){
        $this->trabalhando=$t;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function mudarTrabalho($tr){
         $this->trabalhando= ! $this->trabalhando;
    }

}







?>