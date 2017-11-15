<?php

function inv($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        if ($str2 < 0) {
            $str2 = str_replace('-', '+', $str2); ?>
            <br>
            <?php
            echo "Inverse:" . $str . $str2 . "i";
        } else if ($str2 > 0) {
            $str2 = str_replace('+', '', $str2); ?>
            <br>
            <?php
            echo "Inverse:" . $str . $str2 . "i";
        } else {
            $str2 = str_replace('+', '-', $str2); ?>
            <br>
            <?php
            echo "Inverse:" . $str . $str2 . "i";
        }
    }
}