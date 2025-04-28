<?php

    function even_odd($number) {
        if ($number % 2 == 0) {
            return "{$number} is even";
        } else {
            return "{$number} is odd";
        }
    }

    echo "The number " . even_odd(11) . "<br>";

?>