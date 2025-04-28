<?php

    function largest($a, $b, $c){
        
        if($a > $b && $a > $c){
            return $a;
        } elseif($b > $a && $b > $c){
            return $b;
        } else {
            return $c;
        }
    }

    echo "The largest number is: " . largest(100, 20, 500) . "<br>";

?>