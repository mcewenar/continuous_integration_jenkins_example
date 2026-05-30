<?php
$connection = mysqli_connect("mysql", "root", "root", "asena_actas");
 
if (!$connection) {
    die(" Error de conexión: " . mysqli_connect_error());
}
?>