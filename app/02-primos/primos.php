<?php

function primos($number) {
    $numbers = [];
        for ($i = 1; $i <= $number; $i++):
            $numbers[] = $i;
        endfor;
        
        foreach ($numbers as $key => $prime) {
            //$numbers[$key] = ($prime);
            if($numbers[$key]%2 == 0){
                unset($numbers[$key]);
            }

        }

        return $numbers;
}
