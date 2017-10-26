<?php

session_start();
function verif_nbr($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        $_SESSION['message'] = "Partie réelle:" . $str . \n;
        $_SESSION['message'] .= "Partie imaginaire:" . $str2 . "i" . \n;
    } else {
        $_SESSION['message'] = "Veuillez entrer des nombres entier uniquement";
    }
}