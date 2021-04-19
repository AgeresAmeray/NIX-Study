<?php
function getColor($value)
{
    if ($value == 1) {
        return "red";
    } elseif ($value == 2) {
        return "green";
    } elseif ($value == 3) {
        return "yellow";
    } elseif ($value == 4) {
        return "blue";
    }
}

function multiplication($multiplicand, $factor)
{
    $result = '';
    $multiply = $multiplicand * $factor;
    $array = str_split($multiply);
    foreach ($array as $mass) {
        $color = getColor($mass);
        $result .= "<span style=color:$color>$mass</span>";
    }
    return $result;
}

