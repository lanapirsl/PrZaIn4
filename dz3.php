<?php
//provjerava je li uvjet za nastavak zadovoljen

function godine($datumrodenja,$danasnjidatum){
    $god=$danasnjidatum-$datumrodenja;
    if ($god>=18){
        echo "Mozete nastaviti.";
    }
    if ($god<18) {
        echo "Ne mozete nastaviti.";
    }
}
$datumrodenja=2000;
$danasnjidatum=2018;
echo godine($datumrodenja,$danasnjidatum)
?>