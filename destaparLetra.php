<?php
/**
 * Punto 12)
 * Descubre todas las letras de la colección de letras iguales a la letra ingresada.
 * Devuelve la coleccionLetras modificada, con las letras descubiertas
 * @param array $coleccionLetras
 * @param string $letra
 * @return array colección de letras modificada.
 */
function destaparLetra($coleccionLetras, $letra)
{
    $longitudArreglo = count($coleccionLetras);
    for($i=0;$i<$longitudArreglo;$i++){
        if($coleccionLetras[$i]["letra"]==$letra){
            $coleccionLetras[$i]["descubierta"] = true;
        }
    }
 return $coleccionLetras;
}


$coleccionLetras    = array();
$coleccionLetras[0] = array("letra" => "p", "descubierta" => false);
$coleccionLetras[1] = array("letra" => "a", "descubierta" => false);
$coleccionLetras[2] = array("letra" => "p", "descubierta" => false);
$coleccionLetras[3] = array("letra" => "a", "descubierta" => false);


$l = "a";
$r = destaparLetra($coleccionLetras, $l);
print_r($r);
