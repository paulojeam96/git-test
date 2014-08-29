<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $p1= 10 ;
        $m1= 8 ;
        $m2= 7 ;
        $proj1= 9 ;
        $proj2= 9 ;
        $proj3= 9 ;
        $proj4= 10 ;
        $trabF= 7.5;
        $proc= 7 ;
        $PF= 7;
        $MF= "";
        
        $MI=(30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 + 5*$proj4 + 10*$trabF + 20*$proc)/100;
         if($MI >= 7.5){
             $MF = $MI;
             echo "Aprovado sem prova Final!</br>
             parabéns!!! Boas Férias";
         }
         else{
             $MF = ($MI + $PF)/2;
         } 
            
         if($MF >= 5.0 && $MI <= 7.5){
             echo "Aprovado com Prova Final";
         }
         else if($MF < 5.0){
             echo "reprovado";
         }
        ?>
        
        </br>
        <b>Exercicio 5.1</b>
        <?php
        
        //Array turmas
        $turma[0]= "02K01";
        $turma[1]= "02J01";
        
        //Array Disciplinas
        $disciplinas[0]= "Tecnologia Web 2";
        $disciplinas[1]= "Linguagem de Programação 1";
        
        //Array Semana
        $semana[0]= "Segunda" ;
        $semana[1]= "Terça"   ;
        $semana[2]= "Quarta"  ;
        
        //Array professor
        $professor[0]=  "João"   ;
        $professor[1]= "Charles" ;
             
        
        
        echo 
            " <table border='1'>
            <tr>
              <th>Turma</th>
              <th>Disciplina</th>
              <th>Semana</th>
              <th>Professor</th>
            </tr>    
           
            <tr>
                <td>$turma[0]</td>
                <td>$disciplinas[0]</td>
                <td>$semana[0]</td>
                <td>$professor[1]</td>
            </tr> 
            
            <tr>
                <td>$turma[1]</td>
                <td>$disciplinas[1]</td>
                <td>$semana[1]</td>
                <td>$professor[0]</td>
            </tr> 
            

            <tr>
                <td>$turma[0]</td>
                <td>$disciplinas[1]</td>
                <td>$semana[2]</td>
                <td>$professor[1]</td>
            </tr> 
        </table>"
                
        ?>   
    </body> 
</html>