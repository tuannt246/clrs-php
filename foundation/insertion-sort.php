<?php


function insertionSortAsc($array)
{
    $arrayLength = count($array);

    for ($j = 1; $j < $arrayLength; $j++) {
        $key = $array[$j];
        $i = $j - 1;
        while (($i >= 0) && ($array[$i] > $key)) {
            $array[$i + 1] = $array[$i];
            $i = $i - 1;
        }
        $array[$i + 1] = $key;
    }

    return $array;
}

function insertionSortDesc($array)
{
    $arrayLength = count($array);

    for ($j = 1; $j < $arrayLength; $j++) {
        $key = $array[$j];
        $i = $j - 1;
        while (($i >= 0) && ($array[$i] < $key)) {
            $array[$i + 1] = $array[$i];
            $i = $i - 1;
        }
        $array[$i + 1] = $key;
    }

    return $array;
}


print_r(insertionSortAsc([5, 2, 4, 6, 1, 3]));

print_r(insertionSortDesc([5, 2, 4, 6, 1, 3]));