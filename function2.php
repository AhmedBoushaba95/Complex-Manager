<?php

function inv($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        if ($str2 < 0) {
            $str2i = str_replace('-', '+', $str2);
            echo "Conjugée:" . $str . $str2i . "i"; ?>
            <br>
            <?php
        } else if ($str2 > 0) {
            $str2i = str_replace('+', '', $str2);
            echo "Conjugée:" . $str . "-" . $str2i . "i"; ?>
            <br>
            <?php
        } else {
            $str2i = str_replace('+', '-', $str2);
            echo "Conjugée:" . $str . $str2i . "i"; ?>
            <br>
            <?php
        }
    }
}