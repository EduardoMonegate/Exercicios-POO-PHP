<?php

    require_once 'Lutador.php';
class Luta{


    /* atributos */

    private $desafiado;
    private $desafiante;
    private $round;
    private $aprovada;

    /* metodos especiais */

    public function __construct(){

    }

    public function setDesafiado($d){
        $this->desafiado=$d;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiante($de){
        $this->desafiante=$de;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setRound($r){
        $this->round=$r;
    }
    public function getRound(){
        return $this->round;
    }
    public function setAprovada($a){
        $this->aprovada=$a;
    }
    public function getAprovada(){
        return $this->aprovada;
    }

    /*metodos*/

    public function marcarLuta($l1,$l2){

        if($l1->getCategoria()===$l2->getCategoria()&& ($l1!=$l2)){
            $this->aprovada=true;
            $this->desafiado=$l1;
            $this->desafiante=$l2;
            echo "<br>luta aprovada ";
        }else{
            $this->aprovada=false;
            $this->desafiado=null;
            $this->desafiante=null;
            echo "<br>luta nao aprovada ";
        }

    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->status();
            $this->desafiante->status();

            $vendedor=rand(0,2);

            switch($vencedor){
                case 0: //empate
                $this->desafiante->empatarLuta();
                $this->desafiado->empatarLuta();
                    echo "<p>empate</p>";
                break;

                case 1: //desafiado vencedor
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    echo "<p>ganhouuu</p>".$this->desafiado->getNome();
                break;

                case 2: //desafiante vencedor
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                echo "<p>ganhouuu</p>".$this->desafiante->getNome();
                break;
            }
    }else{
        echo "a luta nao pode acontecer!";
    }
}


}







?>