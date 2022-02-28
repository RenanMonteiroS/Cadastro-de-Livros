<?php

function Filtro1($valor)
{
    $cont = 0;
    $stringban = array( 0 => '0', 1 => '1', 2=> '2', 3 => '3', 4=> '4', 5 => '5', 6=> '6', 7 => '7', 8=> '8', 9 => '9', 10 => '_', 
    11 => '(', 12 => ')', 13 => '[', 14 => ']', 15 => '{', 16 => '}', 17 => '!', 18 => '@', 19 => '#', 20 => '$', 
    21 => '%', 22 => '&', 23 => '*', 24 => '+', 25 => '"', 26 => 'º', 27 => 'ª', 28 => '§', 29 => '°', 30 => '|', 
    31 => '<', 32 => '>', 33 => '?', 34 => '€',
    );
    
        foreach($stringban as $keyS => $valueS)
        {
            $procuraS = strpos($valor, $stringban[$keyS]);
            if (!($procuraS === false)) {
                $cont += 1;
            } 
        }
        
        return $cont;

    
}



function Filtro2($valor)
{
    $cont = 0;
    $stringban = array(0 => '_', 1 => '(', 2 => ')', 3 => '[', 4 => ']', 5 => '{', 6 => '}', 7 => '!',
    8 => '@', 9 => '#', 10 => '$', 11 => '%', 12 => '&', 13 => '*', 14 => '+', 15 => '"', 16 => 'º', 17 => 'ª',
    18 => '§', 19 => '°', 20 => '|', 21 => '<', 22 => '>', 23 => '?', 24 => '€',
    );
    
        foreach($stringban as $keyS => $valueS)
        {
            $procuraS = strpos($valor, $stringban[$keyS]);
            if (!($procuraS === false)) {
                $cont += 1;
            } 
        }
        
        return $cont;

    
}
?>