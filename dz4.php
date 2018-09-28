<?php
//provjerava je li broj prost

function Prosti($n)
{
    for($x=2; $x<$n; $x++){
        if($n %$x ==0){
            return 0;
        }
    }
    return 1;
}
$a = Prosti(7); //upisi broj ovdje
if ($a==0)
    echo "Nije prosti broj.";
else
    echo "Prosti je broj.";
?>
