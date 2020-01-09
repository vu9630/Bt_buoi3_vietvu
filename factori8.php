<?php
$n = $argv[1];


function loopFibo($n){
   for($n = 0; $n <= 4; $n++){
         return $n * ($n-1);
         if($n ==0){
             return 1;
         }
        }
 
}


 function printStarts() {
     for($n=1; $n<20; $n++){
         echo "*";
     }
     echo "*" ."\n";
 }
 printStarts();
 loopFibo($n);
 printStarts();
?>

