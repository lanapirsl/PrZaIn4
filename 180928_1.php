<?php
function duljina($broj){
    $i=0;
    while (@$broj[$i]){
        $i++;
    }
    return $i;
}

$dec=22;
function dectobin($dec){
    $bin="";
    while ($dec>=1){
        $ost=$dec%2;
        $dec=floor(round($dec/2,0,PHP_ROUND_HALF_DOWN));
        $bin.="$ost";
    }
    echo strrev($bin);
}
function dectohex($dec){
    $hex="";
    while ($dec>=1){
        $ost=$dec%16;
        $dec=floor(round($dec/16,0,PHP_ROUND_HALF_DOWN));
        $hex.="$ost";
    }
    echo strrev($hex);
}
echo "Decimal: $dec, Binary: ";
echo dectobin($dec);
echo ", Hex: ";
echo dectohex($dec);