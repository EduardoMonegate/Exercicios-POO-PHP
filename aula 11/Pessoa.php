<?php

abstract class Pessoa{

    // atributos

    protected $nome;
    protected $idade;
    protected $sexo;

    // metodos especiais

    public  final function setNome($n){
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