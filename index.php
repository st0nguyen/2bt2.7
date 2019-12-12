<?php
$arr = [2, 15, 21, 45, 44, 1, 6, 9];

function delElement($arr, $x)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] == $x) {
            for (; $i < count($arr)-1; $i++){
                $arr[$i] = $arr[$i + 1];


            }

        }
    }
    $arr[count($arr)-1]= null;
    return $arr;
}

$arr2 = delElement($arr, 2);
var_dump($arr2);
?>
