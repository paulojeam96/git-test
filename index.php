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
    </body> 
</html>