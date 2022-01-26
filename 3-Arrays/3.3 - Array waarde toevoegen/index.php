<?php
$myheroes = array ('<li>Spiderman</li>' , '<li>superman</li>' , '<li>Batman</li>');
$myheroes[3] = '<li>Thor</li>';

array_push ($myheroes, '<li>Robin hood</li>');

echo $myheroes[0];
echo $myheroes[1];
echo $myheroes[2];
echo $myheroes[3];
echo $myheroes[4];
?>