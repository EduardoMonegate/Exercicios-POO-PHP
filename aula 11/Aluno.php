<?php
    require_once 'Pessoa.php';
class Aluno extends Pessoa{

    private $matr;
    private $curso;

    public function setMatr($m){
        $this->matr=$m;
    }
    public function getMatr(){
        return $this->matr;
    }

    public function setCurso($c){
        $this->curso=$c;
    }
    public function getCurso(){
        return $this->curso;
    }

    public function cancelarMatricula(){
        echo "matricula cancelada";
    }

    public final function pagarMensalidade(){
        echo "pagando mensalidade do aluno: ".$this->getNome();
    }

}







?>