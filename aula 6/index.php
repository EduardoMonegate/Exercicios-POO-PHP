<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Aula 6- usado poo no php</title>
    <style> 
     body{
         background:black;
         color: white;
     }

    </style>
    </head>
    <body>
      <?php 
      
       require_once 'ControleRemoto.php';

       $controle= new ControleRemoto;

       $controle->ligar();
       
       $controle->maisVolume();
       $controle->maisVolume();
       $controle->maisVolume();
       $controle->maisVolume();
       $controle->menosVolume();

       $controle->play();
       $controle->pause();
       

       


       


    
        
    



        ?>
    </body>
</html>