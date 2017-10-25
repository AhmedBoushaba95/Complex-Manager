<?php
function verif_nbr($str, $str2)

{
    if (is_numeric($str) && is_numeric($str2)) {
        echo "Partie réelle:" . $str . "\n";
        echo "Partie imaginaire:" . $str2 . "\n";

    } else {
        echo "Veuillez entrer des nombres entier uniquement";
    }
}