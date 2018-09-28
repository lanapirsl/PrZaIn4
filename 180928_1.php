<?php
function duljina($broj){
    $i=0;
    while (@$broj[$i]){
        $i++;
    }
    return $i;
}

$dec=4;
while ($dec>=1){
    $bin="";
    $ost=$dec%2;
    $dec=floor(round($dec/2,0,PHP_ROUND_HALF_DOWN));
    $bin.=$ost;
    echo "Bin: $bin, Dec: $dec, Ost= $ost <br>";
}
