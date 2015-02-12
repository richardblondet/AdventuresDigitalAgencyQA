HTML
===
Dentro de las actividades requeridas en Adventures para trabajar en el HTML, están:

#### Los elementos de cierre automático
Todas las etiquetas deben estar debidamente cerradass. Para las etiquetas que pueden envolver los nodos como texto u otros elementos, la terminación es una tarea bastante trivial. Para las etiquetas que son auto-cierre, la barra diagonal debe tener exactamente un espacio que le precede.

	<br />
en lugar de su versión compacta, no validada por el W3C Validator

	<br/>

####Atributos y meta etiqutas
Para otras máquinas:

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

Para humanos:

	<a href="http://ejemplo.com/" title="Descripción Aquí, Siempre">Ejemplo</a>

####Comentarios
Los comentarios son implementados utilizando el lenguaje de servidor, en nuestro caso, PHP. 

correcto:

	<?php /** Cabecera */ ?>
		<div id="cabecera">
			Soy Cabeza	
		</div>
	<?php /** FIN Cabecera */ ?>

Incorrecto: 

	<!-- Cabecera --> 
	<div id="cabecera">
			Soy Cabeza	
	</div>
	<!-- FIN Cabecera --> 

####Scripts
Los Scripts son insertados antes de cerrar la etiqueta `<body>`.