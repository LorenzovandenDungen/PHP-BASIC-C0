<?php
function mijnNaamisGroot(){
    $voornaam = "Lorenzo ";
    $achternaam = "van den Dungen";
    $mijn_naam_is = "Mijn naam is ";
    $geheleNaam = $mijn_naam_is . $voornaam . $achternaam;
    echo strtoupper ($geheleNaam);
}

mijnNaamisGroot();
