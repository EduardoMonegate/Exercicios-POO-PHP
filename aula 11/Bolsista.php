<?php
    require_once 'Aluno.php';
class Bolsista extends Aluno{

    private $bolsa;
    private $curso;

    public function setBolsa($b){
        $this->bolsa=$b;
    }
    public function getBolsa(){
        return $this->bolsa;
    }

  

    public function removerBolsa(){
        echo "bolsa removida!";
    }
    public function pagarMensalidade(){
        echo "bolsa paga com desconto!";
    }

}







?>