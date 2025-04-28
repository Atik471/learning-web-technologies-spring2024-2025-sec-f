<?php

    function searchElement($arr, $element) {
        for($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $element) {
                return "Element {$element} found at index: " . $i;
            }
        }
    }

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $element = 5;

    echo searchElement($arr, $element) . "<br>";

?>