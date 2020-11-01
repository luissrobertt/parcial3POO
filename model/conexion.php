<?php
    $contrasena = '';
    $usuario = 'root';
    $nombrebd= 'crud_tareas';

    try {
        $bd = new PDO(
            'mysql:host=localhost;
            dbname='.$nombrebd,
            $usuario,
            $contrasena
           
        );
} catch (Exception $e) {
echo "Error de conexión " . $e->getMessage();
}
?>