<?php

class Pessoa{

    // atributos

    private $nome;
    private $idade;
    private $sexo;

    // metodos especiais

    public function setNome($n){
        $this->nome=$n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function serIdade($i){
        $this->idade=$i;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setSexo($s){
        $this->sexo=$s;
    }
    public function getSexo(){
        return $this->sexo;
    }

    //metodos 


    public function fazerAniversario(){
            $this->idade ++;
    }



   











}








?>