##Seguridad contra inyecciones

Utilice comandos preparados y consultas con parámetros. Estas son las instrucciones SQL que se envían y analizan por el servidor de base de datos por separado de cualquier parámetro. De esta manera es imposible que un atacante pueda inyectar SQL malicioso.

Hay dos formas de lograr esto

 1. Usando [PDO](http://php.net/manual/en/book.pdo.php) 

    $stmt = $pdo->prepare('SELECT * FROM empleados WHERE nombre = :nombre');
    
    $stmt->execute( array( 'nombre' => $nombre )  );
    
    foreach ( $stmt as $row ) {
        # haz algo con $row
    }

 2. Usando [MySQLi](http://php.net/manual/en/book.mysqli.php) 

    $stmt = $dbConnection->prepare('SELECT * FROM empleados WHERE nombre = ?');
    $stmt->bind_param('s', $nombre);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        // haz algo con $row
    }


Con PDO para lograr preparar las instrucciones implementamos una conección como la vemos en el archivo `ejemplo-pdo-conneccion.php` . 