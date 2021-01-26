<?php

class conta{

/* atributos obj*/
    public $numConta;
    public $tipo;
    public $dono;
    public $saldo;
    public $status;


/*metodos especiais de um objeto, sendo eles get,set e construct*/

public function __construct(){
    $this->setstatus(false);
 
 }

public function setnumConta($n){
    $this->numConta=$n;
}
public function getnumConta(){
        return $this->numConta;
}

public function settipo($t){
    $this->tipo=$t;
}
public function gettipo(){
    return $this->tipo;
}

public function setdono($d){
    $this->dono=$d;
}
public function getdono(){
    return $this->dono;
}
public function setsaldo($s){
    $this->saldo=$s;
}
public function getsaldo(){
    return $this->saldo;
}
public function setstatus($sta){
    $this->status=$sta;
}
public function getstatus(){
    return $this->status;
}









/* metodos obj*/


    public function AbrirConta($t){
        $this->settipo($t);
        $this->setstatus(true);

        if($t=='CC' && $this->getstatus()==true){
            $this->setsaldo($this->getsaldo()+50);
            echo "<p>sua conta foi aberta e voce tem 50 reais</p>";
        }else if($t=="CP" && $this->getstatus()==true){
            $this->setsaldo(150);
            echo "<p>sua conta foi aberta e voce tem 150 reais</p>";
        }else{

            echo "<p>nao e possivel abrir sua conta</p>";
        }
            
        
       
    }
    public function fecharConta($s){
        $this->setsaldo($s);
        

        if($this->getsaldo()<0 ){
            
            echo "<p>sua conta esta em debito com banco :c</p>";
        }else if($this->getsaldo()>0){
            echo "<p>sua conta ainda tem dinheiro, retire em caixa antes de fechar sua conta</p>";
        }
        else{
            $this->setstatus(false);
            echo "<p>sua conta foi fechada com sucesso!</p>";
        }



    }
    public function depositar($v){

        if($this->getstatus()==true){
            $this->setsaldo($this->getsaldo()+$v);
            echo "<p>deposito feito</p>";
        }else{
            echo "<p>sua conta nao esta ativa!</p>";
        }


        
    }
    public function sacar($saca){
        if($this->getstatus()==true){
            if($this->getsaldo()<$saca){
                echo "<p>sua conta esta no vermelho cadela!</p>";
            }else{
                $this->setsaldo($this->getsaldo()-$saca);
            echo "<p>saque feito</p>";
            }
            
        }else{
            echo "<p>sua conta nao esta ativa!</p>";
        }

    }
    public function pagarMensalidade($c){
        $this->setstatus($c);
        if($this->getstatus()==true){
            $this->setsaldo($this->getsaldo()-17);
            echo "<p> valor mensal cobrado</p>";
        }
    }
    


}




?>