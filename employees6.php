<?php
$a = $argv[1];
$b = $argv[2];

$nhanVien = $argv[1];
$id =  $argv[2];
function createContract() {



    $nhanVien = array(
     "01" => "Nguyen Van An",
     "04" => "Cong Thuy Anh",
     "05" => "Bui Cong Anh",
    );

     for($a=1; $a < $argv[1]+1; $a++){
         if($nhanVien == $a){
             $count++;
            echo "  Cong ty lua chon 3 nhan vien la : ";
         }   
     }
         while($b < 10 && $b >1){
             echo "Tong "
         }
}

function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
}

printStarts();
createContract();
printStarts();

?>



