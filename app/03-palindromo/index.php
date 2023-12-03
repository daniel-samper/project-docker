<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
            $start = microtime(true);
            
            $n1 = 1;
            $n2 = 100000;

            for($i = $n1; $i <= $n2; $i++) {
                $number = (string)$i;
                $reverse = strrev($number);

                if($number == $reverse){
                    echo $number." ";
                }
            }
            
            $time_elapsed_secs = microtime(true) - $start;
            echo "<br>".$time_elapsed_secs;
        ?>

        <?php

?>
    </body>
</html>
