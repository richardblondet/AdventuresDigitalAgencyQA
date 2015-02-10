<?php  
/**
* Ejemplo de declaraciones
*
* Contiene ejemplos de cómo podemos utilizar los bloques de condiciones.
* Cada bloque tiene espacios.
*
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/blob/master/PHP/2.Declacarion/
* @since DESCONOCIDA(valor por default: DESCONOCIDA)
*
* @package AdventuresDigitalAgencyStandards
* @subpackage Declaración_condiciones
*/

$condicion = true; // Declaramos esta variable booleana para los fines representativos

/**
* Condición if, if not, elseif
*/
if ( $condicion ) {

	# Este bloque se ejecutará

}

if (! $condicion ) {

	# Este bloque no se ejecutará

}

elseif ( $condicion ) {

	# Fíjemos la atención en los espacios para cada condición

}

/**
* Condiciones Yoda
* 
* Las condiciones Yoda se identifican por 
* tener las variables del lado derecho. Vea ejemplo:
*/
if ( true == $condicion ) {

	# La variable del lado derecho, ir pueden.
	
}

while ( $condicion ) {

	# Este bloque necesita control

}

while (! $condicion) {

	# Similar al código de if not

}

$items = array('foo', 'bar');

foreach ( $items as $item ) {

	# Haz algo con $item

}
?>