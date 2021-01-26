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

       
       $p1=new Pessoa();
       $p2=new Aluno();
       $p3=new Professor();
       $p4=new Funcionario();


       $p1->setNome("pedro");
       $p2->setNome("lucas");
       $p3->setNome("marlene");
       $p4->setNome("carmen");


       print_r($p1);
       print_r($p2);
       print_r($p3);
       print_r($p4);




       

        


       


    
        
    



        ?>
    </body>
</html>