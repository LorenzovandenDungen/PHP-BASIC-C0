<?php
$Lorenzo_besteld = 10;

if($Lorenzo_besteld > 10) {
    $prijs = 1.50;
    echo 1.50;
} 
elseif($Lorenzo_besteld < 20) {
    $prijs = 1.25;
    echo 1.25;
} else {
    $prijs = 1.00;
    echo 1.00;
}
?>