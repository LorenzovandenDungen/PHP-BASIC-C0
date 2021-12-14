<?php
    function geefTienProcent(){
        $koopprijs = 75;
        $korting = 10;
        return $koopprijs = $koopprijs * ((100-$korting) / 100);
    }

    function zetAllesgroot(){
        echo '<h1>' . geefTienProcent() . '</h1>';
    }

    zetAllesgroot();
?>