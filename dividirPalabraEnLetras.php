<?php
/** Punto 3 - Estructura C -
 * @return array
 */
function dividirPalabraEnLetras($palabra)
{
 $coleccionLetras = str_split($palabra);
 $longitudPalabra = strlen($palabra);
 for ($i = 0; $i < $longitudPalabra; $i++) {
  $coleccionLetras[$i] = array("letra" => str_split($palabra)[$i], "descubierta" => "false");
 }
 print_r($coleccionLetras);
 return $coleccionLetras;
}

/*PROGRAMA PRINCIPAL*/
echo "ingrese una palabra ";
$palabra = trim(fgets(STDIN));
$letras  = dividirPalabraEnLetras($palabra); //para probar la funcion
/** La función toma en cuenta los espacios de la palabra. Verificar si se permite */
