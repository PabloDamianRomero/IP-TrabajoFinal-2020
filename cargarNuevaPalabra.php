<?php
/**
 * Punto 7)
 * 
 * Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje.
 * Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
 * @param array $coleccionPalabras
 * @return array  colección de palabras modificada con la nueva palabra.
 */
/*>>> Completar la interfaz y cuerpo de la función. Debe respetar la documentación <<<*/
function cargarNuevaPalabra($coleccionPalabras)
{
 $longitudArreglo = count($coleccionPalabras);
 echo "\nIngrese la palabra: ";
 $nuevaPalabra    = trim(fgets(STDIN));
 $coincidiencia   = false;
 $i               = 0;
 /**
  * El siguiente while, buscar sobre la coleccionPalabras, si la nueva palabra a ingresar ya existe
  */
 while (($coincidiencia==false) && ($i < $longitudArreglo)) {
  if ($coleccionPalabras[$i]["palabra"] == $nuevaPalabra) {
   $coincidiencia = true;
  }
  $i++;
 }
 if($coincidiencia==false){
     echo "\nIngrese pista: ";
     $nuevaPista = strtolower(trim(fgets(STDIN)));
     echo "\nIngrese puntaje: ";
     $nuevoPuntoPorPalabra = trim(fgets(STDIN));
     $coleccionPalabras[$longitudArreglo] = array ("palabra" => $nuevaPalabra, "pista" => $nuevaPista, "puntosPalabra" => $nuevoPuntoPorPalabra);
 }else{
     echo "\nLa palabra ya existe";
 }
 return $coleccionPalabras;
}

/**
 * Punto 1)
 * genera un arreglo de palabras para jugar
 * @return array
 */
function cargarPalabras()
{
 $coleccionPalabras    = array();
 $coleccionPalabras[0] = array("palabra" => "papa", "pista" => "se cultiva bajo tierra", "puntosPalabra" => 7);
 $coleccionPalabras[1] = array("palabra" => "hepatitis", "pista" => "enfermedad que inflama el higado", "puntosPalabra" => 7);
 $coleccionPalabras[2] = array("palabra" => "volkswagen", "pista" => "marca de vehiculo", "puntosPalabra" => 10);
 $coleccionPalabras[3] = array("palabra" => "futbol", "pista" => "deporte grupal", "puntosPalabra" => 7);
 $coleccionPalabras[4] = array("palabra" => "libelula", "pista" => "insecto volador", "puntosPalabra" => 8);
 $coleccionPalabras[5] = array("palabra" => "labrador", "pista" => "raza de perro", "puntosPalabra" => 7);
 $coleccionPalabras[6] = array("palabra" => "bhaskara", "pista" => "formula para determinar raices de un polinomio", "puntosPalabra" => 10);

 /*>>> (COMPLETADO)Agregar al menos 4 palabras más <<<*/

 return $coleccionPalabras;
}

/**
 * PROGRAMA PRINCIPAL
 */

$col          = cargarPalabras();
$nuevoArreglo = cargarNuevaPalabra($col);
print_r($nuevoArreglo);
