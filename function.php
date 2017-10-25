<?php
function verif_nbr($str, $str2)

{
    echo $str . $str2;
    if (is_numeric($str) == true && is_numeric($str2) == true) {
        echo "Partie réelle:" . $str . "\n";
        echo "Partie imaginaire:" . $str2 . "\n";

    } else {
        echo "Veuillez entrer des nombres entier uniquement";
    }
}