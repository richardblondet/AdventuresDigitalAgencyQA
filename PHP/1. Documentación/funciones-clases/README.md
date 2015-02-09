Documentación
---

###Funciones y Clases
Use espacios dentro del bloque, no fichas, y asegurarse de que los elementos de cada grupo de variables están alineadas según los ejemplos.

La estructura recomendada para añadir documentación es:

    /**
     * Sumario.
     *
     * Descripción.
     *
     * @package
     *
     * @category NombreCategoria
     * 
     * @author NombreAutor
     * @since x.x.x
     * @access (para funciones o variables)
     *
     * @see Función/método/clase en la que depende
     * @link URL
     * @global tipo $varname Descripción.
     * @global tipo $varname Descripción.
     *
     * @param tipo $var Descripción.
     * @param tipo $var Optional. Descripción.
     * @return tipo Descripción.
     */

**1. Sumario** 
Es la descripción breve, llana y concisa de esta función o clase. Debe ser explicada en una oración lo más simple y entendida posible.Termina con punto. A la hora de redactar, es bueno tener en cuenta responder:

 - Funcionalidad: ¿Qué hace la función? 
 
 - *Buena respuesta: Visualizar última fecha de modificación para un puesto.*
 - *Mala: Muestra la fecha en que el mensaje fue modificada por última vez.*

 - Filtra: ¿Qué se está filtrando?
 - *Buena respuesta: Filtrar el contenido del post.*
 - *Mala: Le permite editar el contenido de la entrada que se emite en la plantilla de entrada.*
 - Acciones: Cuando hace un fuego acción?
 - *Buena respuesta: Los incendios después de la mayor parte de núcleo se carga, y el usuario es autenticado.*
 - *Mala: Permite registrar los tipos de correos personalizados, taxonomías personalizadas y otras* tareas de mantenimiento general, después de un montón de núcleo de WordPress ha cargado.

**2. Descripción**
Es el complemento del sumario, en donde se proveen los detalles y características para una explicación extendida. Termina con punto.

**3. Package**
Es el ID del proyecto en cuestión. Ejemplo: si el nombre del proyecto es 'Campo Visual' entonces `@package campo-visual` representa el ID del proyecto en todo el código fuente. 

**4. @Since**
Implica en qué versión del proyecto fue agregado esta función o clase. Si no se puede determinar la versión utilizamos: `@since DESCONOCIDA`

**5. Access**
Determina cuál es la permisibilidad de ésta función. Este caso sólo aplica para las funciones dentro de las clases. Determinar cuáles son de acceso **público** o de uso interno **privado**.

**6.  See**
Utilizamos este valor cuando tenemos referencias o dependencias de otras funciones o clases en el mismo proyecto. 
Aquí varios ejemplos de sus usos:

 - Funciones,  ` @see generar_reporte () `
 - Clases,  ` @see Calculos_Generales`
 - También métodos, por ejemplo, ` @see Calculos_Generales :: sumar () `
 - Parámetros de Variables Globales o de otros métodos, `@see 'guardar_usuario'` 

**7. Link**
El enlace que provee más información. Si el bloque de código es de un foro, introducir el enlace, junto con el autor del mismo. 

**8. Global** 
Si en la función o en la clase, hacemos uso de variables globales, deberán ser listadas todas las utilizadas dentro del método o clase nombrando su tipo, su nombre, junto a su descripción. Si la variable es un arreglo, objeto o diccionario, entonces las listamos manteniendo la jerarquía de la misma. Su valor por defecto es `VACIA` Ejemplo:

    @global string @var $_SESSION[ 'codigoVerificacion' ] porta el codigo de verificación
    @global array @var $_SESSION[ 'usuario' ] {
       breve descripción de esta variable
       
       @type string @var nombre El nombre del usuario.
       @type int @var edad La edad del usuario
    }
**9. Return**
Es el valor de retorno de la función, o en algunos casos lo que devuelve al instanciar la clase. Debe indicarse todo tipo de posibles retornos. Al igual que el punto anterior, se nombra el tipo de la variable y su nombre. 

**10. Category**
Si la clase pertenece a un grupo específico y es necesario categorizarle, pues usamos esta etiqueta.