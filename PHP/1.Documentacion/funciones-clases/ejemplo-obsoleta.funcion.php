<?php
/**
* Ejemplo de función obsoleta
*
* Función ejemplo para demostrar como documentar un bloque de código
* método o función obsoleta.
*
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/blob/master/PHP/1.Documentacion/cabecera-archivos/ejemplo.php
* @since DESCONOCIDA(valor por default: DESCONOCIDA)
*
* @package AdventuresDigitalAgencyStandards
* @subpackage Documentacion_funciones-clases
*/

/**
* Función ejemplo para los estándares de calidad.
*
* Muestra un **Hola Mundo** en al usuario.
*
* @since DESCONOCIDA
* @deprecated DESCONOCIDA Usar {@see funcion_ejemplo()} en vez.
* @see funcion_ejemplo()
* @link ejemplo-funcion.php
*
*/
function ejemplo() {

	echo "Hola Mundo";

}
?>