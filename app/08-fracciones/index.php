<?php
// Open the file
$myfile = fopen("frac.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("frac.txt"));


// Add each line to an array
if ($myfile) {
   $array = explode("\n", fread($myfile, filesize("frac.txt")));
}
fclose($myfile);

// Recursive function to compute gcd (euclidian method)
function gcd ($a, $b) {
    return $b ? gcd($b, $a % $b) : $a;
}

foreach ($array as $val) {

   if(!strstr($val, '/')){

      $out[0] = $val;
      $out[1] = 1;
   }else{
      $out = preg_split('/[\/]/', $val);
   }  
   $a = $out[0];
   $b = $out[1];
   
   // var_dump($out);
   echo $a."-".$b."=>";
   // echo $out[0]%$out[1];
   $gcd = gcd($a,$b)."\n";
   if($a == 0 || $b == 0){
      echo "ERR";
      echo "<br>";
      continue;
   }elseif($a == 1){
      echo $a."/".$b;
      echo "<br>";
      continue;
   }elseif($b == 1){
      echo $a;
      echo "<br>";
   }elseif($a%$b == 0){
      echo $a/$b;
      echo "<br>";
   }elseif($gcd == 1){
      if(floor($a/$b) == 0){
         echo $a."/".$b; 
         echo "<br>";
         continue;
      }
      echo floor($a/$b)."  ".$a%$b."/".$b; 
      echo "<br>";
   }else{
      echo $a/$gcd."/".$b/$gcd;
      echo "<br>";
   }   

   
}

?>