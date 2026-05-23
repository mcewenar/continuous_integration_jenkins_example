<?php
include("connection.php");
 
$sql = "SELECT * FROM students";
$resultado = mysqli_query($connection, $sql);
 
if (!$resultado) {
    die("Error en consulta: " . mysqli_error($connection));
}
?>