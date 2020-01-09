<?php
$n =argv[1];
$m =argv[2]



function USCLN() {
    $n = 15;
$m = 20;
 
      if($m == 0){
        return $n;   
      }
      if($m > $n){
        return USCLN($m, $n % $m);
       }  
        else {
            return USCLN($n, $m % $n);
        }
}

function BSCNN()  {
     return ($n * $m ) / BSCNN($n, $m);
    
    }
    echo "Uscln la: ".USCLN($n, $m);
    echo "Bscnn la: ".BSCNN($n, $m);

function printStarts() {
    for($n=1; $n<20; $n++){
        echo "*";
    }
    echo "*" ."\n";
}


printStarts();
USCLN($n, $m);
BSCNN($n, $m);
printStarts();

?>


