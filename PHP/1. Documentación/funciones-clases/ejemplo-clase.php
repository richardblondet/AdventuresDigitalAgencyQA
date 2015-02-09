<?php
/**
* Ejemplo clase (sin puntos)
*
* Contiene la clase de ejemplo para la sección de Documentación: funciones y clases
*
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/blob/master/PHP/1.%20Documentaci%C3%B3n/
* @since DESCONOCIDA(valor por default: DESCONOCIDA)
*
* @package AdventuresDigitalAgencyStandards
* @subpackage Documentación_funciones-clases
*/

/**
* Clase ejemplo para los estándares de calidad.
*
* Esta clase y sus métodos ejemplifican el uso correcto de 
* cómo utilizar las clases en el código fuente. Esta es una descripción
* ejemplo que indica que no importa las líneas, el segundo bloque corresponde
* a la descripción.
*
* @package AdventuresDigitalAgencyStandards
*
* @author Richard Blondet <richard@adventures.do> 
* @since DESCONOCIDA
*
* @see Documentación/funciones-clases/README.md
* @link https://github.com/richardblondet/AdventuresDigitalAgencyStandards/tree/master/PHP/1.%20Documentaci%C3%B3n/funciones-clases
* 
*/

class Calculos_Generales {

	/**
	* Versión de la clase.
	*
	* Los valores deben aumentar sólo para su parte decimal.
	*
	* @var string
	* 
	* @access private
	*/
	private string $version; 

	
	/**
	* Constructor de la clase
	*
	* Define la clase, su funcionalidad e inicializa la misma.
	*
	* @link http://php.net/manual/es/language.oop5.decon.php
	*
	* @author Richard Blondet <richard@adventures.do> 
	* @author Posible Segundo Autor <email> 
	*
	* @param VACIO
	* @see Calculos_Generales::hola_mundo()
	*
	* @access public
	*/
	public function __construct($mensaje = "Hola Mundo") {
		
		$this->version = "0.1"; // Asigamos la versión de la clase

		$this->hola_mundo($mensaje); // Muestra el mensaje por default "Hola Mundo"
	}

	/**
	* Muestra hola mundo por la pantalla
	*
	* Su función es mostrar el mensaje 'Hola Mundo' por pantalla, pero
	* recibe por parametro una variable del tipo string para mostrar 
	* otro mensaje
	*
	* @link http://php.net/manual/es/tutorial.firstpage.php
	*
	* @author Richard Blondet <richard@adventures.do>
	*
	* @param string @var $mensaje
	* @see Calculos_Generales::__construct()
	*
	* @access public
	*/
	public function hola_mundo($mensaje) {

		if(! is_string( $mensaje ) ) {
			throw new Exception("Esta variable sólo acepta valores del tipo string", 1);
			
		}

		echo $mensaje;
	}

}


/**
* @see Calculos_Generales :: hola_mundo ()
* @link funciones-clases/ejemplo-clase.php
*/
$EjemploClase	=	new Calculos_Generales();
?>