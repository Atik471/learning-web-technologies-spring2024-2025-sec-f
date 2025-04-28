<?php

   function calculateVAT($amount, $vatRate) {
       return $amount * ($vatRate / 100);
   }

   echo "VAT: " . calculateVAT(5000, 15) . "<br>";

?>