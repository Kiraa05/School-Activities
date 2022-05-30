<?php
    
    $a = 225;
    $b = 110;
    $c = 450;

        if($b < $a){
            $temp = $a;
            $a = $b;
            $b = $temp;
        } 

        if($c < $a){
            $temp = $a; 
            $a = $c;  
            $c = $temp; 
        }

        if($c < $b){
            $temp = $a;
            $b = $c;
            $c = $temp;  
        }

     echo "$a < $b < $c";


?>