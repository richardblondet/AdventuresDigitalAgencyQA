/**
* Ejemplo de Documentación
*
* @author Richard Blondet <richard@adventures.do>
* @updated 12.02.2015
*/

/**
* Suma dos números
*
* @param {Number} a 
* @param {Number} b
* @return {Number} sum
*/
function sum( a, b ) { // note el espaciado de entre los parámetros
	return a + b;
}



/**
* Patrón Clase de Varios Métodos Ejemplos
* También para desarrollo de plugins.
*/
var Clase = (function(){
  

	/** 
	* nombre de la clase
	* @access private
	*/ 
	var nombre   = "Clase Ejemplo";

	/** 
	* versión de la clase
	* @access private
	*/ 
	var version  = "0.1";

	/**
	* Devuelve la versión de la clase
	* @return {String} version
	*/
	var ver_version = function () {
		return version;  
	};


	/**
	* Devuelve un string
	* @return {String} my_string
	*/
	var metodo = function (string) {
		var my_string = string || "Hola soy un string";
		return my_string;
	};

	/**
	* Inicializa la Clase
	* @return VOID
	*/
	var init = function () {
		var app = document.createElement("h1");
		app.innerHTML = ver_version();
		document.write(nombre + ", Version: " + ver_version() + metodo(" -Hello World"));
		console.log("Hello World, I'm version: " + ver_version());

	};

	/**
	* Asignamos los valores al nombre Clase
	*/
	return {
		version: ver_version,
		metodo: metodo,
		init: init
	}
  
}());

Clase.init();
// Al ejecutar esto, debe mostrar 
// -- Clase Ejemplo, Version: 0.1 -Hello World