<?php
    if (!isset($_GET['id'])){
        header('Location: index.php');
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM tareas WHERE idtareas = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);




?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarea</title>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <h3>Editar tarea:</h3>
        <form method="POST" action="editarProceso.php">
            <table>
                <tr>
                    <td>Titulo: </td>
                    <td><input type="text" name="txt2Titulo" value="<?php echo $persona->titulo; ?>"></td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><input type="text" name="txt2Descripcion" value="<?php echo $persona->descripcion; ?>"></td>
                </tr>
                <tr>
                    <td>Fecha de registro: </td>
                    <td><input type="text" name="txt2Fecha" value="<?php echo $persona->fecha_registro; ?>"></td>
                </tr>
                <tr> 
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->idtareas; ?>">
                    <td colspan="2"><input type="submit" value="EDITAR TAREA"></td>           
                </tr>
            </table>
        </form>
    </center>

</body>
</html>