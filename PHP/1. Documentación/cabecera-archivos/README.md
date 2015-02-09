Cabeceras de Archivos
---
La función de este bloque es dar una visión previa de lo que contiene este archivo. Su estructura está compuesta: 

    /**
     * Sumario (sin puntos)
     *
     * Descripción. (termina en punto)
     *
     * @link URL
     * @since x.x.x (valor por default: DESCONOCIDA)
     *
     * @package project-id
     * @subpackage Componente
     */

**1. Sumario** 
Es la descripción breve, llana y concisa de esta función o clase. Debe ser explicada en una oración lo más simple y entendida posible.Termina con punto. A la hora de redactar, es bueno tener en cuenta responder:

 - Funcionalidad: ¿Qué hace la función? 
 
 - *Buena respuesta: Visualizar última fecha de modificación para un puesto.*
 - *Mala: Muestra la fecha en que el mensaje fue modificada por última vez.*

 - Filtra: ¿Qué se está filtrada?
 - *Buena respuesta: Filtrar el contenido del post.*
 - *Mala: Le permite editar el contenido de la entrada que se emite en la plantilla de entrada.*
 - Acciones: Cuando hace un fuego acción?
 - *Buena respuesta: Los incendios después de la mayor parte de núcleo se carga, y el usuario es autenticado.*
 - *Mala: Permite registrar los tipos de correos personalizados, taxonomías personalizadas y otras* tareas de mantenimiento general, después de un montón de núcleo de WordPress ha cargado.

**2. Descripción**
Es el complemento del sumario, en donde se proveen los detalles y características para una explicación extendida. Termina con punto.

**3. Link**
El enlace que provee más información. Si el bloque de código es de un foro, introducir el enlace, junto con el autor del mismo.

**4. @Since**
Implica en qué versión del proyecto fue agregado esta función o clase. Si no se puede determinar la versión utilizamos: `@since DESCONOCIDA`

**5. Package**
Es el ID del proyecto en cuestión. Ejemplo: si el nombre del proyecto es 'Campo Visual' entonces `@package campo-visual` representa el ID del proyecto en todo el código fuente. 

**6. Sub Package**
Es el ID del plugin o widget en cuestión. Todo lo que extienda funcionalidad al proyecto.