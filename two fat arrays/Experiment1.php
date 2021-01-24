<?php
$arrayOne = [1, 2, 3, 4, 5, 6, 7, 8, 1];
$arrayTwo = [3, 1, 4, 5, 8, 2, 1];
$checked = array();

foreach ($arrayOne as $item) {
    if (!array_key_exists($item, $checked)) {
        $checked[$item] = $item;
    } else {
        echo $item;
    }
}
