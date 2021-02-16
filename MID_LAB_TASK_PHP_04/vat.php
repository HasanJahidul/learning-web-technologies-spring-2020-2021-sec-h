<?php

$price = 200;

$vat=0.15;

$priceAfterCalculateVat= $price+($price*$vat);

echo "Price is ".$price."<br>";
echo "Price After adding 15% of Vat: " . $priceAfterCalculateVat;
?>