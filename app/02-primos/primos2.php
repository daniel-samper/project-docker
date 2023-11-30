<?php

function primos($number){
    $numbers = array();
    for ($i=1; $i <= $number ; $i++) { 
        $numbers[$i] = true;
    }

    $limit = round(sqrt($number));
    for($i=2; $i < $limit;$i++){
        if($numbers[$i]){
            for($j = $i; $j * $i <= $number; $j++){
                $numbers[$j*$i]=false;
            }
        }
    }
    return $numbers;
}