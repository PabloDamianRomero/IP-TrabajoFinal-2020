<?php
/******************************************

 * NATALIA PAMELA MORA VÁSQUEZ - FAI 2151
 * MATIAS FEDERICO PERALTA MACRI - FAI 3077
 * PABLO DAMIAN ROMERO - FAI 1652

 ******************************************/

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
 return $coleccionPalabras;
}

/**
 * Punto 2)
 * genera un arreglo de juegos jugados
 * /*>>> (COMPLETADO)completar comentario <<<
 *
 */
function cargarJuegos()
{
 $coleccionJuegos    = array();
 $coleccionJuegos[0] = array("puntos" => 0, "indicePalabra" => 1);
 $coleccionJuegos[1] = array("puntos" => 10, "indicePalabra" => 2);
 $coleccionJuegos[2] = array("puntos" => 0, "indicePalabra" => 1);
 $coleccionJuegos[3] = array("puntos" => 8, "indicePalabra" => 0);

 /*>>> Agregar al menos 3 juegos realizados más <<<*/

 return $coleccionJuegos;
}

/**
 * Punto 3)
 * a partir de la palabra genera un arreglo para determinar si sus letras fueron o no descubiertas
 * @param string $palabra
 * @return array
 */
function dividirPalabraEnLetras($palabra)
{
 $coleccionLetras = str_split($palabra);
 $longitudPalabra = strlen($palabra);
 for ($i = 0; $i < $longitudPalabra; $i++) {
  $coleccionLetras[$i] = array("letra" => str_split($palabra)[$i], "descubierta" => false);
 }
 return $coleccionLetras;
 /*>>> (COMPLETADO) Completar para generar la estructura de datos b) indicada en el enunciado.
recuerde que los string pueden ser recorridos como los arreglos.  <<<*/

}

/**
 * muestra y obtiene una opcion de menú ***válida***
 * Punto 4)
 * @return int
 */
function seleccionarOpcion()
{
 // $int $opcion
  echo "--------------------------------------------------------------\n";
  echo "\n ( 1 ) Jugar con una palabra aleatoria";
  echo "\n ( 2 ) Jugar con una palabra elegida";
  echo "\n ( 3 ) Agregar una palabra al listado";
  echo "\n ( 4 ) Mostrar la información completa de un número de juego";
  echo "\n ( 5 ) Mostrar la información completa del primer juego con más puntaje";
  echo "\n ( 6 ) Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario";
  echo "\n ( 7 ) Mostrar la lista de palabras ordenada por puntaje";
  echo "\n ( 8 ) Salir";
  do {
  echo "\n Indique una opción válida:";
  $opcion = trim(fgets(STDIN));
 } while (($opcion < 1) || ($opcion > 8));
 /*>>> (COMPLETADO) Completar el menu <<<*/

 /*>>> (COMPLETADO) Además controlar que la opción elegida es válida. Puede que el usuario se equivoque al elegir una opción <<<*/

 echo "--------------------------------------------------------------\n";
 return $opcion;
}

/**
 * Punto 5)
 * Determina si una palabra existe en el arreglo de palabras
 * @param array $coleccionPalabras
 * @param string $palabra
 * @return boolean
 */
function existePalabra($coleccionPalabras, $palabra)
{
 $i       = 0;
 $cantPal = count($coleccionPalabras);
 $existe  = false;
 while ($i < $cantPal && !$existe) {
  $existe = $coleccionPalabras[$i]["palabra"] == $palabra;
  $i++;
 }

 return $existe;
}

/**
 * Punto 6)
 * Determina si una letra existe en el arreglo de letras
 * @param array $coleccionLetras
 * @param string $letra
 * @return boolean
 */
function existeLetra($coleccionLetras, $letra)
{
 $i          = 0;
 $cantLetras = count($coleccionLetras);
 $existe     = false;
 while ($i < $cantLetras && !$existe) {
  $existe = $cantLetras[$i]["letra"] == $letra;
  $i++;
 }
 /*>>> (COMPLETADO)Completar cuerpo de la función <<<*/
 return $existe;
}

/**
 * Punto 7) (Implementado en cargarNuevaPalabra)
 * Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje.
 * Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
 * @param array $coleccionPalabras
 * @return array  colección de palabras modificada con la nueva palabra.
 */
/*>>> Completar la interfaz y cuerpo de la función. Debe respetar la documentación <<<*/

/**
 * Punto 8)
 * Obtener indice aleatorio
 * @param int $min
 * @param int $max
 * @return int devuelve un indice entero
 */
function indiceAleatorioEntre($min, $max)
{
 $i = rand($min, $max); // obtener un número aleatorio entre $min y $max (incluidos)
 return $i;
}

/**
 * Punto 9)
 * solicitar un valor entre min y max
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarIndiceEntre($min, $max)
{
 do {
  echo "Seleccione un valor entre $min y $max: ";
  $i = trim(fgets(STDIN));
 } while (!($i >= $min && $i <= $max));

 return $i;
}

/**
 * Punto 10)
 * Determinar si la palabra fue descubierta, es decir, todas las letras fueron descubiertas
 * @param array $coleccionLetras
 * @return boolean
 */
function palabraDescubierta($coleccionLetras)
{

 /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
 * Punto 11)
 * valida que un String ingresado tenga un único caracter
 */
function solicitarLetra()
{
 $letraCorrecta = false;
 do {
  echo "Ingrese una letra: ";
  $letra = strtolower(trim(fgets(STDIN)));
  if (strlen($letra) != 1) {
   echo "Debe ingresar 1 letra!\n";
  } else {
   $letraCorrecta = true;
  }

 } while (!$letraCorrecta);

 return $letra;
}

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

 /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
 * Punto 13)
 * obtiene la palabra con las letras descubiertas y * (asterisco) en las letras no descubiertas. Ejemplo: he**t*t*s
 * @param array $coleccionLetras
 * @return string  Ejemplo: "he**t*t*s"
 */
function stringLetrasDescubiertas($coleccionLetras)
{
 $pal = "";

 /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/

 return $pal;
}

/**
 * Punto 14)
 * Desarrolla el juego y retorna el puntaje obtenido
 * Si descubre la palabra se suma el puntaje de la palabra más la cantidad de intentos que quedaron
 * Si no descubre la palabra el puntaje es 0.
 * @param array $coleccionPalabras
 * @param int $indicePalabra
 * @param int $cantIntentos
 * @return int puntaje obtenido
 */
function jugar($coleccionPalabras, $indicePalabra, $cantIntentos)
{
 $pal             = $coleccionPalabras[$indicePalabra]["palabra"];
 $coleccionLetras = dividirPalabraEnLetras($pal);
 //print_r($coleccionLetras);
 $puntaje = 0;

 /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/

 //Mostrar pista:

 //solicitar letras mientras haya intentos y la palabra no haya sido descubierta:

 if ($palabraFueDescubierta) {
  //obtener puntaje:

  echo "\n¡¡¡¡¡¡GANASTE " . $puntaje . " puntos!!!!!!\n";
 } else {
  echo "\n¡¡¡¡¡¡AHORCADO AHORCADO!!!!!!\n";
 }

 return $puntaje;
}

/**
 * Punto 15)
 * Agrega un nuevo juego al arreglo de juegos
 * @param array $coleccionJuegos
 * @param int $ptos
 * @param int $indicePalabra
 * @return array coleccion de juegos modificada
 */
function agregarJuego($coleccionJuegos, $puntos, $indicePalabra)
{
 $coleccionJuegos[] = array("puntos" => $puntos, "indicePalabra" => $indicePalabra);
 return $coleccionJuegos;
}

/**
 * Punto 16)
 * Muestra los datos completos de un registro en la colección de palabras
 * @param array $coleccionPalabras
 * @param int $indicePalabra
 */
function mostrarPalabra($coleccionPalabras, $indicePalabra)
{
 //$coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);

 /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
 * Punto 17)
 * Muestra los datos completos de un juego
 * @param array $coleccionJuegos
 * @param array $coleccionPalabras
 * @param int $indiceJuego
 */
function mostrarJuego($coleccionJuegos, $coleccionPalabras, $indiceJuego)
{
 //array("puntos"=> 8, "indicePalabra" => 1)
 echo "\n\n";
 echo "<-<-< Juego " . $indiceJuego . " >->->\n";
 echo "  Puntos ganados: " . $coleccionJuegos[$indiceJuego]["puntos"] . "\n";
 echo "  Información de la palabra:\n";
 mostrarPalabra($coleccionPalabras, $coleccionJuegos[$indiceJuego]["indicePalabra"]);
 echo "\n";
}

/*>>> Implementar las funciones necesarias para la opcion 5 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 6 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 7 del menú <<<*/

/******************************************/
/************** PROGRAMA PRINCIAL *********/
/******************************************/
define("CANT_INTENTOS", 6); //Constante en php para cantidad de intentos que tendrá el jugador para adivinar la palabra.

do {
 $opcion = seleccionarOpcion();
 switch ($opcion) {
  case 1: //Jugar con una palabra aleatoria

   break;
  case 2: //Jugar con una palabra elegida

   break;
  case 3: //Agregar una palabra al listado

   break;
  case 4: //Mostrar la información completa de un número de juego

   break;
  case 5: //Mostrar la información completa del primer juego con más puntaje

   break;
  case 6: //Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario

   break;
  case 7: //Mostrar la lista de palabras ordenada por orden alfabetico

   break;
 }
} while ($opcion != 8);
