<?php


include 'Exercici1';

$minut = 5;

$total = tarifaTrucada($minut);
echo "El total a pagar per la trucada $minut minuts es: " . $total . 
"céntims.";

print "<br>";

//Exercici 2

$unitatsXocolate = 2;
$unitatsXicles = 1;
$unitatsCaramels = 1;

$total = xocolate($unitatsXocolate)
 + xiclets($unitatsXicles)
 + caramels($unitatsCaramels);

echo "El total de la compra es de " . number_format($total, 2) . "\n"; 

?>