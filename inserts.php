<?php
include("connection.php");
 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
 
$sql = "INSERT INTO students(nombre, correo) VALUES('$nombre', '$correo')";
 
$resultado = mysqli_query($connection, $sql);
 
if ($resultado) {
    echo " Guardado correctamente <br>";
    echo "<a href='index.html'>Volver</a> <br>";
    echo "<a href='list_students.php'>Ver estudiantes</a>";
} else {
    echo " Error: " . mysqli_error($connection);
}
?>
 
