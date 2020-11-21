<?php
/**
 * Punto 10)
 * Determinar si la palabra fue descubierta, es decir, todas las letras fueron descubiertas
 * @param array $coleccionLetras
 * @return boolean
 */
function palabraDescubierta($coleccionLetras)
{
 $descubierta       = true;
 $longitudColeccion = count($coleccionLetras);
 $i                 = 0;
 while (($descubierta) && ($i < $longitudColeccion)) {
  if ($coleccionLetras[$i]["descubierta"] != true) {
   $descubierta = false;
  }
  $i++;
 }
 return $descubierta;
}

$coleccionLetras    = array();
$coleccionLetras[0] = array("letra" => "f", "descubierta" => true);
$coleccionLetras[1] = array("letra" => "u", "descubierta" => true);
$coleccionLetras[2] = array("letra" => "t", "descubierta" => true);
$coleccionLetras[3] = array("letra" => "b", "descubierta" => true);
$coleccionLetras[4] = array("letra" => "o", "descubierta" => true);
$coleccionLetras[5] = array("letra" => "l", "descubierta" => true);

//print_r($coleccionLetras);

$resultado = palabraDescubierta($coleccionLetras);
if ($resultado == true) {
 echo "\nLetras descubiertas = SI";
} else {
 echo "\nLetras descubiertas = NO";
}
