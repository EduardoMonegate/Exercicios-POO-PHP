<?php

class caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if($this->tampada==true){
            echo "caneta tampada, destampe para continar!";
        }else{
            echo "rabiscando";
        }
     
    }
    public function tampar(){
        $this->tampada=true;
    }
    public function destampar(){
        $this->tampada=false;
    }

}

?>