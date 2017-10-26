<?php

session_start();
function verif_nbr($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        $str = str_replace(',', '.', $str);
        $str2 = str_replace(',', '.', $str2);
        echo "Partie réelle:" . $str; ?>
        <br>
        <?php
        echo "Partie imaginaire:" . $str2 . "i"; ?>
        <br>
        <?php
    } else {
        echo "Veuillez entrer des nombres entier uniquement";
    }
}