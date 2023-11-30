<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
            $start = microtime(true);
            include "02-primos/primos2.php";
            //echo '<pre>'; print_r(primos(10000)); echo '</pre>';

            
            $numbers = primos(10000);
            foreach($numbers as $key => $value){
                if($value){
                    echo"$key"."\n";
                }
            }
            
            $time_elapsed_secs = microtime(true) - $start;
            echo "<br>".$time_elapsed_secs;
        ?>

        <?php

?>
    </body>
</html>
