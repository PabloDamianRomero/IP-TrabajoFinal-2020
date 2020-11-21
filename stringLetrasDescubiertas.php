<?php
/**
 * Punto 13)
 * obtiene la palabra con las letras descubiertas y * (asterisco) en las letras no descubiertas. Ejemplo: he**t*t*s
 * @param array $coleccionLetras
 * @return string  Ejemplo: "he**t*t*s"
 */
function stringLetrasDescubiertas($coleccionLetras)
{
 $pal = "";
 $longitudColeccion = count($coleccionLetras);
 for($i=0;$i<$longitudColeccion;$i++){
     if($coleccionLetras[$i]["descubierta"] == true){
         $pal = $pal.$coleccionLetras[$i]["letra"];
     }else{
         $pal = $pal."*";
     }
 }
 return $pal;
}

$coleccionLetras    = array();
$coleccionLetras[0] = array("letra" => "l", "descubierta" => false);
$coleccionLetras[1] = array("letra" => "a", "descubierta" => true);
$coleccionLetras[2] = array("letra" => "b", "descubierta" => false);
$coleccionLetras[3] = array("letra" => "r", "descubierta" => false);
$coleccionLetras[4] = array("letra" => "a", "descubierta" => true);
$coleccionLetras[5] = array("letra" => "d", "descubierta" => false);
$coleccionLetras[6] = array("letra" => "o", "descubierta" => false);
$coleccionLetras[7] = array("letra" => "r", "descubierta" => false);



$r = stringLetrasDescubiertas($coleccionLetras);
echo "\nPalabra: ".$r;