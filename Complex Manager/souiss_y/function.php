<?php

function verif_nbr($str)

{
    if(!is_numeric($str))
    {
        echo "Veuillez entrer un nombre entier uniquement";
    }else{
        echo "yo";
    }
}