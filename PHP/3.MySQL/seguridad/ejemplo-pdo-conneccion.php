<?php  
/**
* Conexión segura para preparar instrucciones seguras
*/
$DBNOMBRE  = "prueba";
$DBHOST    = "localhost";
$DBUSUARIO = "usuario";
$DBPASS    = "pass";

$dbConnection = new PDO( 'mysql:dbname=$DBNOMBRE;host=$DBHOST;charset=utf8', $DBUSUARIO, $DBPASS );

$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // importante establecer éstas configuraciones
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>