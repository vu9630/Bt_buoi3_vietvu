<?php

$a = argv[1];
function printSchedule($n) {
    $n = 2;
    
    switch ($a) {
        
            case 1 :
                echo 'CN, hoc sang' ;
                break;
            case 2:
                echo 'thu 2, hoc sang' ."\n";
                break;
            case 3:
                echo 'thu 3, hoc chieu';
                break;
            case 4:
                echo 'thu 4, hoc sang';
                break;
            case 5 :
                echo 'thu 5, hoc chieu';
                break;
            case 6 :
                echo 'thu 6, hoc chieu';
                break;
            case 7 :
                echo 'thu 7, hoc chieu';
                break;
            default:
                echo 'Không tìm thấy';
                break;
        }

    }

function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
    echo "*" . "\n";
}

printStarts();

printSchedule($n);
printStarts();

?>