<?php
//strlen pjeske

$a="Kolika je duljina ove recenice?";
$i=0;
while (@$a[$i]!="") {
    $i++;
} 
echo "Duljina recenice '$a' je $i znakova.";
