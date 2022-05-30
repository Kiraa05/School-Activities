<?php

    $valorTotal = 1000;
    $des10 = $valorTotal * 0.1;
    $des20 = $valorTotal * 0.2;
    $des30 = $valorTotal * 0.3;

    function calcularDesconto ($vTotal){

        $des10 = $vTotal * 0.1;
        $des20 = $vTotal * 0.2;
        $des30 = $vTotal * 0.3;
        
        if ($vTotal >= 100 && $vTotal < 500 ) {
            $vDesc = ($vTotal - $des10);
            print "<p>Valor Total a Pagar sem Desconto = $vTotal</p>";
            print "<p>Porcentagem do Desconto = 10%</p>";
            print "<p>Valor Total a Pagar com o Desconto = $vDesc</p>";        
            //return ($vTotal);
        } 
        elseif ($vTotal >= 500 && $vTotal < 1000 ) {
            $vDesc = ($vTotal - $des20);
            print "<p>Valor Total a Pagar sem Desconto = $vTotal</p>";
            print "<p>Porcentagem do Desconto = 20%</p>";
            print "<p>Valor Total a Pagar com o Desconto = $vDesc</p>";        
            //return ($vTotal);
        }
        else {
            $vDesc = ($vTotal - $des30);
            print "<p>Valor Total a Pagar sem Desconto = $vTotal</p>";
            print "<p>Porcentagem do Desconto = 30%</p>";
            print "<p>Valor Total a Pagar com o Desconto = $vDesc</p>";        
            //return ($vTotal);
        }
    }
    

    calcularDesconto($valorTotal);
    // print "Valor Total a Pagar sem Desconto = $valorTotal";
    // print "Porcentagem do Desconto = $des10";
    // print "Valor Total a Pagar com o Desconto = $vTotal";





?>