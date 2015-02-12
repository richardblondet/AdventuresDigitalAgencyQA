Documentar en Javascript
===

Es importante documentar en el código fuente. Nos ayuda a entender la funcionalidad de los componentes, sin necesidad de inspeccionar con rigurosidad la implementación. El patrón de documentación para implementar en los métodos/funciones de javascript es: 

    /**
    * Sumario.
    *  
    * Descripción.
    *  
    * @param {tipoDeParametro} nombreVariable 
    * @return {tipoDeParametro} nombreVariable
    */

De esta forma, tenemos una idea de cuál es la funcionalidad del método, antes de iniciar a inspeccionarlo. 

**Sumario** Es la descripción breve, llana y concisa de esta función o clase. Debe ser explicada en una oración lo más simple y entendida posible.Termina con punto. A la hora de redactar, es bueno tener en cuenta responder:

 - Funcionalidad: ¿Qué hace la función? 
 
 - *Buena respuesta: Visualizar última fecha de modificación para un puesto.*
 - *Mala: Muestra la fecha en que el mensaje fue modificada por última vez.*

 - Filtra: ¿Qué se está filtrando?
 - *Buena respuesta: Filtrar el contenido del post.*
 - *Mala: Le permite editar el contenido de la entrada que se emite en la plantilla de entrada.*
 - Acciones: Cuando hace un fuego acción?
 - *Buena respuesta: Los incendios después de la mayor parte de núcleo se carga, y el usuario es autenticado.*
 - *Mala: Permite registrar los tipos de correos personalizados, taxonomías personalizadas y otras* tareas de mantenimiento general, después de un montón de núcleo de WordPress ha cargado.

**Descripción** Es el complemento del sumario, en donde se proveen los detalles y características para una explicación extendida. Termina con punto. 

**Param** Es o son las variables pasadas por parámetros según corresponda. Junto a ella va el tipo de variable pasada, su nombre y una breve descripción.

**Return** Es el valor de retorno de la función, o en algunos casos lo que devuelve al instanciar la clase. Debe indicarse todo tipo de posibles retornos. Al igual que el punto anterior, se nombra el tipo de la variable y su nombre. 