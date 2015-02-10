<?php  
/**
* Ejemplo Función
*
* Contiene una función de ejemplo para la sección de Documentación: funciones y clases
*
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/blob/master/PHP/1.%20Documentaci%C3%B3n/
* @since DESCONOCIDA(valor por default: DESCONOCIDA)
*
* @package AdventuresDigitalAgencyStandards
* @subpackage Documentación_funciones-clases
*/

/**
* Función ejemplo para los estándares de calidad.
*
* **Esta función** el uso correcto de 
* cómo utilizar las funciones en el código fuente. 
* Esta es una descripción ejemplo que indica que no 
* importa las líneas, el segundo bloque corresponde
* a la descripción. Es buena práctica que verifiquemos
* si ya la palabra de la función no ha sido reservada
* para luego ser implementada. Buenas prácticas.
*
* @package AdventuresDigitalAgencyStandards
*
* @author Richard Blondet <richard@adventures.do> 
* @since DESCONOCIDA
*
* @see Documentación/funciones-clases/README.md
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/tree/master/PHP/1.%20Documentaci%C3%B3n/funciones-clases
*
* @param string @var $foo es el primer parámetro de la función
* @param string @var $bar es el segundo parámetro de esta función
*
* @return VACIO == void
* 
*/
if(! function_exists( 'funcion_ejemplo' ) ) {
	function funcion_ejemplo( $foo = 'foo', $bar = 'bar' ) {

		echo "Hola " . $foo . $bar; 

	}
}
?>