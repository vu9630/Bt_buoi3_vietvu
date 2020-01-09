<?php
$argvPhay = $argv;


 function countAndSum($argvPhay) {
    $sum = 0;
   
    $count = 0;
    
      for($i=2; $i <= $argvPhay[1]+1; $i++){
          $sum += $argvPhay[$i];
          
      if($argvPhay[$i]% 2 != 0){
            $count++;
          }
      }
   
       echo "tổng các số là: ".$sum.", có  ".$count." số lẻ" . "\n";
 }  
 


 function printStarts() {
     for($i=1; $i<=20; $i++){
      echo "*" ;
     }
     echo "*" . "\n";
     
 }


 printStarts();
 countAndSum($argvPhay);
 printStarts();
?>

