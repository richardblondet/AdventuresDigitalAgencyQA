Buenas Prácticas CSS
---
Las hojas de estilo tienden a hacer larga de longitud.  El enfoque lentamente se pierde mientras los objetivos previstos comienzan a repetirse cada vez más. Escribir código inteligente desde el principio nos ayuda a retener la información general sin dejar de ser flexibles en todo cambio.

 - Si está tratando de solucionar un problema, es mejor eliminar el código antes de añadir más. 
 - Los "Números Mágicos" son de mala suerte. Son los números que se utilizan como soluciones rápidas en una sola vez. Ejemplo: `.box {margin-top: 37px}.`  
 - El [DOM](http://es.wikipedia.org/wiki/Document_Object_Model) cambiará con el tiempo, es preferible orientar el elemento que desea utilizar en lugar de "encontrarlo" a través de sus padres. Ejemplo: Utilice `.destacar` sobre el elemento en lugar de `.destacar a` (donde el selector está jerárquicamente) 
 - Saber cuándo utilizar la propiedad **height**. Se debe utilizar cuando se va a incluir elementos externos (como imágenes). De lo contrario **usar line-height** para una mayor flexibilidad.
No repetir propiedad predeterminada y combinaciones de valores (por ejemplo, `display: block;` en elementos a nivel de bloque).

Dentro de las hojas de estilo básicas, a menudo se encuentran incoherencias. Por ello, como desarrolladores trabajamos para hacer frente a éstas incidencias.

---
###Estructura
Existen diferentes métodos para la estructurar de una hoja de estilo. Con el CSS en el base, es importante mantener un alto grado de legibilidad. Esto permite colaboradores subsiguientes a tener una comprensión clara del flujo del documento.

- Utilice las tabulaciones, no espacios, para sangrar cada propiedad. Añadir dos líneas en blanco entre las secciones y una línea en blanco entre los bloques en una sección. 
- Cada selector debe estar en su propia línea, que termina en una coma o una llave de apertura.
- La llave de cierre debe estar alineado a la izquierda, con el mismo nivel de sangrado como el selector de apertura. Véase:

Correcto:

    #selector-1,
    #selector-2,
    #selector-3 {
        background: #fff;
        color: #000;
    }

Incorrecto:

    #selector-1, #selector-2, #selector-3 {
        background: #fff;
        color: #000;
        }
     
    #selector-1 { background: #fff; color: #000; }

Con especificidad, viene una gran responsabilidad. Los selectores generales nos permiten ser eficientes, pero pueden tener consecuencias adversas si no son evaluados. La ubicación específica de los selectores nos pueden ahorrar tiempo, pero pueden conducirnos rápidamente a una hoja de estilo sobrepopulada. El mejor ejercicio es usar mejor a juicio para crear selectores, que encontrar el equilibrio adecuado entre contribuyendo al estilo general y el diseño del DOM.

Similar a los [Estándares de Codificación de WordPress](https://make.wordpress.org/core/handbook/coding-standards/css/)  para los nombres de archivos, utiliza palabras en minúsculas y separadas con guiones al nombrar selectores. 

- Evite CamelCase y guiones bajos. 
- Utilice los selectores legibles que describen qué elemento(s) tienen que estilo. 
- Selectores de atributos deben utilizar comillas de dobles valores. 
- Abstenerse de utilizar los selectores sobre-calificados, `div.container` simplemente se puede plantear como `.container`.

Correto:

    #comment-form {
        margin: 1em 0;
    }
     
    input[type="text"] {
        line-height: 1.1;
    }

Incorrecto:

    #commentForm { /* Evite camelCase. */
        margin: 0;
    }
     
    #comment_form { /* Evite los underscores(rayas abajos). */
        margin: 0;
    }
     
    div#comment_form { /* Evite sobre-calificación. */
        margin: 0;
    }
     
    #c1-xr { /* Qué es c1-xr?! Use mejores nombres. */
        margin: 0;
    }
     
    input[type=text] { /* Debería ser [type="text"] */
        line-height: 110% /* Valor incorrecto para esta propiedad */
    }

---

###Propiedades
Similar a los selectores, las propiedades que son demasiado específicas obstaculizarán la flexibilidad del diseño. Menos es más. Asegúrese de que no está repitiendo el estilo o la introducción de dimensiones fijas (cuando una solución fluida es más aceptable).

- Las propiedades deben estar seguidas por dos puntos y un espacio.
- Todas las propiedades y valores deben ser minúsculas, a excepción de los nombres de fuentes y propiedades específicas del proveedor. 
- Utilice el código hexadecimal para los colores, o `rgba ()` si necesita la opacidad. 

---
###Valores
Existen muchas formas de añadir valores a las propiedades. Siga las siguientes pautas para ayudarnos a mantener un alto grado de consistencia.

 - Espacio antes del valor, después de los dos puntos. 
 - No paréntesis, rellenar con espacios. 
 - Siempre termine en un punto y coma. 
 - Use comillas dobles en lugar de comillas simples, y sólo cuando sea necesario, como cuando un nombre de fuente tiene un espacio. 
 - Los valores cero (0)  no deben tener unidades, a menos que sean necesarias, como con la transición duración. 
 - El **line-height** también debe ser usadas sin unidades, a menos que sean necesarias ser definidas como un valor píxel específico. Más información: http://meyerweb.com/eric/thoughts/2006/02/08/unitless-line-heights/
 - Use un cero a la izquierda para valores decimales, incluyendo en rgba (). 
 - Los valores separados por comas múltiples para una propiedad deben estar separados por un espacio o un salto de línea, incluso dentro rgba (). 
 - El final de línea debe ser utilizado para los valores de varias partes largas como las de propiedades abreviadas como **box-shadow** y **text-shadow**. Cada valor subsiguiente después de la primera debe ser entonces en una nueva línea, con sangría al mismo nivel que el selector y luego espaciados a la izquierda a alinear con el valor anterior.

Correcto:

    .class { /* Uso correcto de comillas */
        background-image: url(images/bg.png);
        font-family: "Helvetica Neue", sans-serif;
    }
     
    .class { /* Uso correcto de valores cero */
        font-family: Georgia, serif;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.5),
                           0 1px 0 #fff;
    }

Incorrecto:

    .class { /* Evite dejar sin punto y coma, y deje espacio entre el valor y la propiedad */
        background:#fff
    }
     
    .class { /* Evite añadir unidad de medida al cero */
        margin: 0px 0px 20px 0px;
    }

---
###Media Queries
Nos permiten trabajar fácilmente el DOM para diferentes tamaños de pantalla. Si va a agregar cualquier, asegúrese de probar por encima y por debajo del punto de ruptura que se dirigen.

---
###Comentarios
Comenta y comentar libremente. Si existen dudas o irregularidades sobre el tamaño de archivo,  utiliza herramientas para crear una versión minified junto con la constante SCRIPT_DEBUG. Así comentarios largas romperán manualmente la longitud de la línea a 80 caracteres.

 - Una tabla de contenidos debe ser utilizado para las hojas de estilo más largos, especialmente aquellos que son altamente seccionados. El uso de un número de índice (1.0, 1.1, 2.0, etc.) ayuda en la búsqueda y saltar a una ubicación. 
 - Los comentarios deben ser formateados tanto como PHPDo. El estándar CSSDoc no está necesariamente ampliamente aceptado o utilizado, pero algunos aspectos de la misma puede ser adoptado con el tiempo. Las secciones como cabeceras  y sub-secciones deben tener saltos de línea antes y después. 
 - Los comentarios en línea no deben tener saltos de línea vacíos que separan el comentario de la partida a la que se refiera.

Para secciones y sub-secciones:

    /*=====================================
     #.# Título de Sección
    
    --- Descripción de la sección. Tienen tantos guiones como la cantidad de
    --- caracteres que tiene la numeración del título.
    =====================================*/
     
    .selector {
        float: left;
    }

Para comentarios en línea:

    /* Este es un comentario acerca de este selector */
     
    .otro-selector {
        position: absolute;
        top: 0 !important; /* Debo explicar porqué esto es importante */
    }