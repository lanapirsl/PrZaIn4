<?php
//trazi koliko se puta zadani znak ponavlja u stringu

function duljina($string){
    $i=0;
    while (@$string[$i]){
        $i++;
    }
    return $i;
}
function trazi($string,$a){
    $br=0;
    for($i=0; $i<duljina($string);$i++){
        if ($string[$i]==$a){
            $br++;
        }
    }
    return $br;
    }
$recenica="Pretrazi koliko se puta slovo o ponavlja u ovoj recenici";
$trazi="o";
$n=1;
echo "U recenici '$recenica', slovo 'o' se pojavljuje ";
echo trazi($recenica,$trazi);
echo " puta.";