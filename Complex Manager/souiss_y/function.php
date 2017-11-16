<?php

function verif_nbr($str, $str2)
{
    $str = str_replace(',', '.', $str);
    $str2 = str_replace(',', '.', $str2);
    if (is_numeric($str) && is_numeric($str2)) {
        echo "Partie réelle:" . $str; ?>
        <br>
        <?php
        echo "Partie imaginaire:" . $str2 . "i"; ?>
        <br>
        <?php
    } else {
        echo "Veuillez entrer des nombres uniquement"; ?>
        <br>
        <?php
    }
}

function conj($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        if ($str2 < 0) {
            $str2 = str_replace('-', '+', $str2);
            echo "Conjugué:" . $str . $str2 . "i"; ?>
            <br>
            <?php
        } else if ($str2 > 0) {
            $str2 = str_replace('+', '', $str2);
            echo "Conjugué:" . $str . "-" . $str2 . "i"; ?>
            <br>
            <?php
        } else {
            $str2 = str_replace('+', '-', $str2);
            echo "Conjugué:" . $str . $str2 . "i"; ?>
            <br>
            <?php
        }
    } else {
        echo "";
    }
}

function mod($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        $a = $str * $str;
        $b = $str2 * $str2;
        $tt = $a + $b;
        $arr = sqrt($tt);
        echo "Module: √$tt = sprintf(\"%.3e\",$arr)";
    }
}

function arg($str, $str2)
{
    if (is_numeric($str) && ($str2)) {
        $arg = $str2 / $str;
        $re = atan($arg);
        ?>
        <br>
        <?php
        echo "Un argument de z: θ = " . $re . " rad";
    }
}

function trig($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        $a = $str * $str;
        $b = $str2 * $str2;
        $tt = $a + $b;
        $arg = $str2 / $str;
        $re = atan($arg);
        ?>
        <br>
        <?php
        echo "Forme trigonométrique: √$tt (cos(" . $re . ") + isin(" . $re . "))";
        ?>
        <br>
        <?php
    }
}