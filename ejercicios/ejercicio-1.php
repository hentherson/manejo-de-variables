<?php
/**
 * Haga un algoritmo que tenga 3 nombres de persona 3 edades y escriba que tiene la menor edad
 */
$nombre1 ='Carlos';
$nombre2 ='Yoceth';
$nombre3 ='Andres';

$edad_carlos = 12;
$edad_yoceth = 12;
$edad_andres = 25;


if ($edad_carlos < $edad_yoceth) {

    if ($edad_carlos < $edad_andres ) {

        echo "{$nombre1} es Menor y su edad es {$edad_carlos}";
    }
    else {
        echo "{$nombre2} es Menor y su edad es {$edad_andres}";
    }
}
elseif ($edad_yoceth < $edad_carlos){

    if ($edad_yoceth < $edad_andres ){

        echo "{$nombre2} es Menor y su edad es {$edad_yoceth}";
    }
    else{

        echo "{$nombre3} es Menor y su edad es {$edad_andres}";
    }
}
else {
    echo '2 o mas personas tienen la misma edad';
}

echo '<br>';


/*echo ($edad_Carlos < $edad_Yoceth) ? 'Carlos es Menor ' : 'Yoceth es Mayor';
echo '<br>';
echo ($edad_Carlos < $edad_Andres) ? 'Carlos es Menor' : 'Andres es Mayor';
echo '<br> <br>';
echo ($edad_Yoceth < $edad_Andres) ? 'Yoceth es Mayor' : 'Andres es Menor';*/

