<?php


function checknum($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
                break;
            }
        }
    }
    return true;
}
echo "Dãy 100 số nguyên tố đầu tiên là: "."<br>";
for($j = 0; $j< 100; $j++){
    if(checknum($j)){
        echo $j." ";
    }
}
