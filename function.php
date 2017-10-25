<?php
function verif_nbr($str, $str2)

{
    if(!is_numeric($str) && !is_numeric($str2))
    {
        echo "Veuillez entrer des nombre entier uniquement";
    }else{
        echo "Partie réelle:" . $str . "\n";
        echo "Partie imaginaire:" . $str2 . "\n";
    }
}