<?php
include("list.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista</title>
</head>
<body>
 
    <h2>Lista de estudiantes</h2>
 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
        </tr>
 
    <?php
    while($fila = mysqli_fetch_assoc($resultado)) {
    ?>
    <tr>
        <td><?php echo $fila['id_student']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
    </tr>
    <?php
    }
    ?>
 
    </table>
 
    <br>
    <a href="index.html">Volver</a>
 
</body>
</html>
