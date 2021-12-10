<?php
$_test1_ = 3;
$_test2_ = 6;

if($_test1_ == $_test2_){
    echo "gelijk";
}
else{
    echo "de vergelijking is niet gelijk";
}
echo "<br>";
if($_test1_ != $_test2_){
    echo "ongelijk";
}
else{
    echo "ongelijk";
}
echo "<br>";
if($_test1_ === $_test2_){
    echo "identiek";
}
else{
    echo "de vergelijking is niet identiek";
}
echo "<br>";
if($_test1_ > $_test2_){
    echo "groter dan";
}
else{
    echo "de vergelijking is niet groter dan";
}
echo "<br>";
if($_test1_ < $_test2_){
    echo "test 1 is kleiner dan test 2";
}
else{
    echo "de vergelijking is niet kleiner dan";
}
echo "<br>";
if($_test1_ >= $_test2_){
    echo "groter of gelijk aan test 2";
}
else{
    echo "de vergelijking is niet groter of gelijk aan";
}
echo "<br>";
if($_test1_ <= $_test2_){
    echo "kleiner of gelijk aan test 2";
}
else{
    echo "de vergelijking is niet kleiner of gelijk aan";
}
?>