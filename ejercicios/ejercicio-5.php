<?php
/**
 * Haga un algoritmo que obtenga nombre de la persona, edad, dinero y que tipo de tarjeta desea obtener.
 * Debe realizar lo siguiente:
 *
 * 1. Debe verificar si es mayor de edad para poder sacar una tarjeta, si no es así no puede obtener la tarjeta.
 * 2. Si desea sacar una tarjeta de credito debe hacer esta ecuación:
 *
 *    - Si la edad es mayor a 18 entonces el cupo disponible debe ser su edad menos la edad permitida que es 18.
 *
 * 2.1. Si el cupo disponible es menor que el dinero que tiene debe mostrar un mensaje menciando tarjeta de credito
 *      sin suficiente cupo, si no mustra un mensaje se ha guardado la cantidad ... y tiene cupo disponible ...
 * 3. Sí es tarjeta debito puede agregar todo el dinero que desee.
 * 4. No debe permitir agregar números menores de 0.
 * 5. Los tipos de tarjetas permitidos son Debito y Credito. Si escribe otra tarjeta debe mostrar un mensaje.
 *
 */