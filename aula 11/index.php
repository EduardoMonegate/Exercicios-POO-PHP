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
      
       require_once "Pessoa.php";
       require_once "Aluno.php";
       require_once "Professor.php";
       require_once "Funcionario.php";
       require_once "Visitante.php";
       require_once "Tecnico.php";
       require_once "Bolsista.php";

       
       $p1=new Visitante();
       $p1->setNome("matheus");
       $p1->setSexo("masculino");
       $p2=new Aluno();
       $p2->setNome("pedro");
       $p2->pagarMensalidade();

       print_r($p1);
       



       

        


       


    
        
    



        ?>
    </body>
</html>