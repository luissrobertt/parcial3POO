<?php
    include 'model/conexion.php';
    $sentencia = $bd->query("SELECT * FROM tareas");
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($tareas);

    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title> Mis Tareas</title>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <h3> MIS TAREAS DE POO</h3>
        <table>
            <tr>
               <td>idtareas</td>
               <td>titulo</td>
               <td>descripcion</td>
               <td>fecha_registro</td>
               <td>Editar</td>
               <td>Eliminar</td>
           </tr>

           <?php
                foreach ($tareas as $dato) {
                    ?>
                    <tr>
                        <td><?php echo $dato->idtareas; ?></td>
                        <td><?php echo $dato->titulo; ?></td>
                        <td><?php echo $dato->descripcion; ?></td>
                        <td><?php echo $dato->fecha_registro; ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->idtareas; ?>">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->idtareas; ?>">Eliminar</a></td>
           </tr>

                    <?php
                }

           ?>
           
        </table>

        <!-- inicio insert -->
        <hr>
        <h3>Ingresar Tareas:</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                <td>Titulo: </td>
                <td><input type="text" name="textTitulo"></td>
                </tr>
                <tr>
                <td>Descripcion: </td>
                <td><input type="text" name="textDescripcion"></td>
                </tr>
                <tr>
                <td>Fecha de Registro: </td>
                <td><input type="text" name="textFecha"></td>
                </tr>
                <input type="hidden" name="oculto" value="1">

                <tr>
                    <td><input type="reset" name=""></td>
                    <td><input type="submit" value="INGRESAR TAREA"></td>
                </tr>
                
            </table>
        </form>

        <!-- fin insert -->
   </center>
</body>
</html>