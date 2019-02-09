<?php

$nombre = 'Jeremy';             // Compila mas rapido con comillas simple que con comillas dobles.
$apelido = "Reyes";
$edad = '28';

echo $nombre . ' ' . $apelido;  // Impresion normal
echo '<br>';
echo '$nombre';                 // Interpolación de cadenas con comillas simples no se puede.
echo '<br>';
echo "$nombre";                 // Interpolación de cadenas con comillas dobles si funciona.
echo '<br>';
echo "{$nombre}";               // Interpolación con buenas practicas.
echo '<br>';
echo $nombre . ' ' . $apelido . ' con edad de '. $edad;
echo '<br>';
echo "{$nombre} {$apelido} con edad de {$edad}";
echo '<br>';
echo "$nombre $apelido con edad de $edad";