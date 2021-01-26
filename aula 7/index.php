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
      
       require_once "Lutador.php";
       require_once "Luta.php";

       $lutadores=[];

       $lutadores[0]=new Lutador("Pretty Boy","franca",1.15,68.9,11,3,1);
       $lutadores[1]=new Lutador("Putscript","brasil",1.68,57.8,14,2,3);
       $lutadores[2]=new Lutador("Snap","eua",1.65,80.9,12,2,1);
       $lutadores[3]=new Lutador("Dead","austrilia",1.93,81.6,13,0,2);


       
       
    
       $luta227= new Luta;
       $luta227->marcarLuta($lutadores[0],$lutadores[1]);
      
       $luta227->lutar();
       $lutadores[1]->status();



       

        


       


    
        
    



        ?>
    </body>
</html>