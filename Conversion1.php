<?php
$n= $argv[1];

function printStarts() {
    for($n=1; $n<20; $n++){
        echo "*";
    }
    echo "*" ."\n";
}

$x= $argv[1];


	function classifyFluid($x) {
	
    if($x>40){
        echo "Extra strong liquor";
    }
    else if($x>20 && $x<=40){
        echo "Strong liquor";
    }
    else if($x>15 && $x<=20){
        echo "Liquor";
    }
    else if($x>12 && $x<=15){
        echo "Strong vine";
    }
    else if($x>10.5 && $x<=12){
        echo "Normal vine";
    }
    else if($x>10.5){
        echo "Light vine";
    }
}


printStarts();
classifyFluid($x);
printStarts();

?>