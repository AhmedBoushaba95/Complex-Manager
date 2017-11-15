<?php

function inv($str, $str2)
{
    if (is_numeric($str) && is_numeric($str2)) {
        if ($str2 < 0) {
            $str2i = str_replace('-', '+', $str2);
            $strcar = $str * $str;
            $str2icar = $str2i * $str2i;
            $den = $strcar - $str2icar;
            echo "Inverse:" . $str . $str2i . "i / (" . $str . $str2 . "i)(" . $str . $str2i . "i) soit: " . $str . $str2i . "i / " . $den; ?>
            <br>
            <?php
        } else if ($str2 > 0) {
            $str2i = str_replace('+', '', $str2);
            echo "Inverse:" . $str . "-" . $str2i . "i / (" . $str . "+" . $str2i . "i )(" . $str . "-" . $str2i . "i)"; ?>
            <br>
            <?php
        } else {
            $str2i = str_replace('+', '-', $str2);
            echo "Inverse:" . $str . $str2i . "i / (" . $str . $str2 . "i )(" . $str . "-" . $str2i . "i)"; ?>
            <br>
            <?php
        }
    }
}