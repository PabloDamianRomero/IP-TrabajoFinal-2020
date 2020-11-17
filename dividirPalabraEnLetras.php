<?php
/** Punto 3 - Estructura C - 
 * @return array
 */
function dividirPalabraEnLetras($palabra){
    $coleccionLetras = str_split ($palabra);
    for ($i=0; $i < strlen ($palabra); $i++) { 
        $coleccionLetras [$i] = array("letra"=> str_split($palabra)[$i], "descubierta" => "false");
    }
    print_r($coleccionLetras);
   
}


 /*PROGRAMA PRINCIPAL*/
 echo "ingrese una palabra ";
 $palabra = trim(fgets(STDIN));
 $letras = dividirPalabrasEnLetras ($palabra); //para probar la funcion
 
