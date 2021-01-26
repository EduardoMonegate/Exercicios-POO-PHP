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
      
      require_once "Animal.php";
      require_once "Cachorro.php";
      require_once "Gato.php";

      $animal=new Cachorro();
      $animal->barulho();

      

       

        


       


    
        
    



        ?>
    </body>
</html>