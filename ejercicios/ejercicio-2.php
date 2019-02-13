<?php
/**
 * Haga un algoritmo que calcule la calificación de un estudiante. Como en las universidades, primer corte
 * 30%, segundo 30% y tercero 40%. Debo poder digitar de 0 a 5 con 2 decimales a la derecha las notas y ver
 * los resultados. Ejemplo: Mi nota del primer corte es de 3.40 y el resultado total me da 3.86.
 */

$nota1 = 3.40;
$nota2 = 4.29;
$nota3 = 3.90;

$n1= ($nota1*(0.30));
$n2= ($nota2*(0.30));
$n3= ($nota3*(0.40));

echo "el 30% del primmer Corte es {$n1} " ;

echo "<br>";
echo "el 30% del segundo Corte es: {$n2}" ;
echo "<br>";
echo "el 40% del tercer  Corte es: {$n3} <br>" ;

$Promedio =($n1+$n2+$n3);

echo "<h2> la nota Final es {$Promedio}</h2>";
