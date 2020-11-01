<?php
    if (!isset($_POST['oculto'])) {
        exit();
    }

    include 'model/conexion.php';
    $titulo = $_POST['textTitulo'];
    $descripcion = $_POST['textDescripcion'];
    $fecha = $_POST['textFecha'];

    $sentencia = $bd->prepare("INSERT INTO tareas(titulo,descripcion,fecha_registro) VALUES 
    (?,?,?);");
    $resultado = $sentencia->execute([$titulo,$descripcion,$fecha]);
    
    if($resultado === TRUE) {
        //echo "Tarea guardada correctamente";
        header('Location: index.php');
    }else{
        echo "Error";
    }
    



?>