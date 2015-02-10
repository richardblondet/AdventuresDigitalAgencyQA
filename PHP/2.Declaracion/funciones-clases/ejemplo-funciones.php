<?php  
/**
* Ejemplo declarar funciones
*
* Ver cómo declaramos las funciones es con un ejemplo
*
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/blob/master/PHP/
* @since DESCONOCIDA(valor por default: DESCONOCIDA)
*
* @package AdventuresDigitalAgencyStandards
* @subpackage Documentación_funciones-clases
*/


/**
* Función ejemplo 
*
* **Esta función** está vacía y muestra como 
* podemos preguntar si la palabra para nuestra función
* ya no fue tomada, y si está disponible, usarla
*
* @package AdventuresDigitalAgencyStandards
*
* @author Richard Blondet <richard@adventures.do> 
* @since DESCONOCIDA
*
* @see Declaracion/funciones-clases/README.md
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/tree/master/PHP/
*
* @param string @var $foo es el primer parámetro de la función
* @param string @var $bar es el segundo parámetro de esta función
*
* @return void
* 
*/
if(! function_exists( 'hola_mundo' ) ) {
	
	/* Las funciones se declaran utilizando las palabras con el underscore (_) */
	function hola_mundo( $foo = 'foo', $bar = 'bar' ) {

		echo "Hola, " . $foo . $bar . ", cómo estás"; 

	}

}
?>