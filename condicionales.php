<?php

$edad_adulto = 18;

$edad_hentheson = 30;
$edad_jeremy = 30;
$edad_sofi = 30;

if ($edad_hentheson >= $edad_adulto) {
    echo "Hentherson ingresó con una edad de {$edad_hentheson}";
}
else {
    echo "Hentherson no pudi ingresar porque tiene unaedad de {$edad_hentheson} y se necesita tener mayor o igual de {$edad_adulto} años";
}

echo '<br>';

if ($edad_hentheson >= $edad_adulto && $edad_jeremy >= $edad_adulto) {
    echo 'Cumplieron la condición';
}
else {
    echo 'No cumplieron la condición';
}

echo '<br>';

// Saber que edad es mayor
if ($edad_jeremy > $edad_hentheson) {

    if ($edad_jeremy > $edad_sofi) {
        echo 'Jeremy es mayor';
    }
    else {
        echo 'Sofi es mayor';
    }
}
elseif ($edad_hentheson > $edad_jeremy) {

    if ($edad_hentheson > $edad_sofi) {
        echo 'Hentherson es mayor';
    }
    else {
        echo 'Sofi es mayor';
    }
}
else {
    echo 'Todos tienen la misma edad';
}

echo '<br>';

// Operadores ternarios

#1. Condicion normal
if ($edad_hentheson >= $edad_adulto) {
    echo 'Ingresó';
}
else {
    echo 'No ingresó';
}

echo '<br>';

#2. Operador ternario
echo ($edad_hentheson >= $edad_adulto) ? 'Ingresó' : 'No ingresó';

echo '<br>';

#3. Operador ternario en variable
$estado = $edad_hentheson >= $edad_adulto ? 'Ingresó' : 'No ingresó';

echo $estado;

echo '<br>';

#4. Operador ternario en string
echo "Hentherson " . ($edad_hentheson >= $edad_adulto ? 'Ingresó' : 'No ingresó');

echo '<br>';

// Switch

$tarjetas_henthterson = 'Tarjeta Debito';

switch ($tarjetas_henthterson) {

    case 'Tarjeta Credito':
        echo 'Tiene descuneto del 10%';
        break;

    case 'Tarjeta Debito':
        echo 'Tiene descuneto del 5%';
        break;


    default:
        echo 'No tiene descuento';
        break;
}