<?php
$var1 = 3;
$var2 = 6;

if($var1 < 20 && $var2 > 5) {
    echo "Het getal zit tussen de 20 en de 5";
} else{
    echo "het getal is groter dan 20 of kleiner dan 5!";
}
echo "<br>";
if($var1 = 10 || $var2 > 5){
    echo "Of het een";
} else{
    echo "Of het ander";
}
echo "<br>";
if($var1 == 3 xor $var2 > 5){
    echo "XOR 1";
} else{
    echo "XOR 2";
}
echo "<br>";
if($var1 != 3 && $var2 > 5){
    echo "True als de vergelijking niet waar is";
} else{
    echo "False";
}
?>