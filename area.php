<?php

    function area($length, $width) {
        return $length * $width;
    }
    function perimeter($length, $width) {
        return 2 * ($length + $width);
    }

    echo "The area of a rectangle is: " . area(5, 10) . "<br>";
    echo "The perimeter of a rectangle is: " . perimeter(5, 10) . "<br>";

?>