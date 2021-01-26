<?php
    require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    
    /* atributos */

 private $volume;
 private $ligado;
 private $tocando;

   /* metodos especiais*/

   public function __construct(){
    $this->volume=50;
    $this->ligado=false;
    $this->tocando=false;

   }

   private function setVolume($v){
        $this->volume=$v;
   }
   private function getVolume(){
       return $this->volume;
   }


   private function setLigado($l){
    $this->ligado=$l;
        }
    private function getLigado(){
   return $this->ligado;
    }


    private function setTocando($d){
        $this->tocando=$d;
    }
    private function getTocando(){
    return $this->tocando;
    }


    

    /* metodos */

    public function ligar(){
        $this->setLigado(true);
        echo "ligado";
    }
    public function desligar(){
        $this->setLigado(false);
        echo "desligado";
    }
    public function maisVolume(){
        if($this->getLigado()==true){
            $this->setVolume($this->getVolume()+1);
            echo "o volume esta:".$this->getVolume();
        }

       
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-1);
        }
        echo "o volume esta:".$this->getVolume();
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
            echo "esta tocando";
        }
    }
    public function pause(){
            if($this->getLigado()&& $this->getTocando()){

                $this->setTocando(false);
                 echo "esta pausado";
            }
            
    }


}



?>