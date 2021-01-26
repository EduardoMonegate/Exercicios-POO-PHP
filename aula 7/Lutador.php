<?php

class Lutador{

    /* atributos */

    private $nome;
    private $nacionalidade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empate;


    /*metodos especiais*/

    public function __construct($nome,$n,$a,$p,$v,$d,$e){
        $this->nome=$nome;
        $this->nacionalidade=$n;
        $this->altura=$a;
        $this->setPeso($p);
        $this->vitoria=$v;
        $this->derrota=$d;
        $this->empate=$e;
    }

    public function setNome($n){
        $this->nome=$n;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNacionalidade($na){
        $this->nacionalidade=$na;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setAltura($a){
        $this->altura=$a;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function setPeso($p){
        $this->peso=$p;
        $this->setCategoria($p);
    }
    public function getPeso(){
        return $this->peso;
    }

    private function setCategoria($peso){
        if($peso<52.2){
            $this->categoria="invalido";
        }else if($peso<=70.3){
            $this->categoria="leve";
        }else if($peso<=83.9){
            $this->categoria="medio";
        }else if($peso<=120.2){
            $this->categoria="pesado";
        }
    }
    public function getCategoria(){
        return $this->categoria;
    }
    
    public function setVitoria($v){
        $this->vitoria=$v;
    }
    public function getVitoria(){
        return $this->vitoria;
    }

    public function setDerrota($d){
        $this->derrota=$d;
    }
    public function getDerrota(){
        return $this->derrota;
    }

    public function setEmpate($e){
        $this->empate=$e;
    }
    public function getEmpate(){
        return $this->empate;
    }


    /* metodos */


    public function apresentar(){
       echo "nome:".$this->getNome();
       echo "<br>nacionalidade:".$this->getNacionalidade();
       echo "<br>categoria:".$this->getCategoria();
       echo "<br>altura:".$this->getAltura();
    }
    public function status(){
        echo "<p> APRESENTAMOSSSS O LUTADORRRRRRR</P>";
        echo " Pesoooooooo  ".$this->getCategoria();
        echo " Com ".$this->getVitoria()." vitorias ".$this->getDerrota()." derrotas ".$this->getEmpate()." empates</p>";

        echo "<br> E eleeeeeeeeeeeeeeeeeeeeEEEeEeE   ".$this->getNome();
    }
    public function ganharLuta(){
        $this->setVitoria($this->getVitoria()+1);
    
    }
    public function perderLuta(){
        $this->setDerrota($this->getDerrota()+1);
    }
    public function empatarLuta(){
        $this->setEmpate($this->getEmpate()+1);
    }
    
    












}








?>