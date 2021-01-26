<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Aula 1- usado poo no php</title>
    <style> 
     body{
         background:black;
         color: white;
     }

    </style>
    </head>
    <body>
      <?php
        require_once 'conta.php';
        
        $conta= new conta;
        
        $conta->numConta=15;

        $conta->AbrirConta("CP");
        
        $conta->depositar(400);
        $conta->sacar(60);
        $conta->pagarMensalidade(true);

        print_r($conta)
        




    
        
    



        ?>
    </body>
</html>