<?php

class copo{
    
    private $tamanho;
    private $largura;
    private $estilo;
    public $cor;
    private $liquido;
    public function getliquido(){
        return $this->Liquido;
    }
    public function setliquido($l){
        $this->liquido=$l;

    }
    public function __construct(){
        $this->cor='azul';
        $this->liquido=true;
    }

    

    function ColocarLiquido(){

        if($this->liquido==true){
            echo "liquido colocado! "; 
        }else{
            echo "ERRO! nao encotramos o liqido";
        }
    }
    function beber(){
        $this->liquido=true;
    }
    function ParaBeber(){
        $this->liquido=false;
    }

}

?>