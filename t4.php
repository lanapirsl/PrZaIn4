<?php
//racuna nasu tezinu na zadanom planetu ili mjesecu

function tezina ($masa,$g){
    $t=($masa/9.81)*$g;
    return $t;
}

$masa=82; //masa u kg
$jupiter=24.79; //gravitacija na Jupiteru
$merkur=3.7; //gravitacija na merkuru
$venera=8.87;
$mjesec=1.62;
$mars=3.711;
$saturn=10.44;
$uran=8.69;
$neptun=11.15;
$t=tezina($masa,$mjesec);
echo "Vasa je masa na planeti = $t kg.";
