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
        require_once 'copo.php';
        $teste=true;
        $copo=new copo;
       
        $copo->ColocarLiquido();
        $copo->setLiquido($teste);
        

        print_r($copo)




    
        
    



        ?>
    </body>
</html>