<?php
$connection = mysqli_connect("localhost", "root", "", "bd_students");
 
if (!$connection) {
    die(" Error de conexión: " . mysqli_connect_error());
}
?>