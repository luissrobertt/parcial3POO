<?php
    //print_r($_POST);
    if (!isset($_POST['oculto'])){
        header('Location: index.php');
    }

    include 'model/conexion.php';
    $id2 = $_POST['id2'];
    $titulo2 = $_POST['txt2Titulo'];
    $descripcion2 = $_POST['txt2Descripcion'];
    $fecha2 = $_POST['txt2Fecha'];

    $sentencia = $bd->prepare("UPDATE tareas SET titulo = ?, descripcion = ?, fecha_registro = ?, WHERE idtareas = ?;");

    $resultado = $sentencia->execute([$titulo2,$descripcion2,$fecha2, $id2]);

    if (resultado === TRUE) {
        header('Location: index.php');
    }else{
        echo "Error";
    }
    


?>