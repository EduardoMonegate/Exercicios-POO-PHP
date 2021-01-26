<?php


abstract class Animal{


protected $nome;
protected $idade;
protected $peso;

public function setNome($n){
    $this->nome=$n;
}
public function getNome(){
    return $this->nome;
}
public function setIdade($i){
    $this->idade=$i;
}
public function getIdade(){
    return $this->idade;
}
public function setPeso($p){
    $this->peso=$p;
}
public function getPeso(){
    return $this->peso;
}

public function barulho(){

}








}







?>