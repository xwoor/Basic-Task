<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "task";

$conn = mysqli_connect($server, $user, $password,$dbname);
if (!mysqli_set_charset($conn, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conn));
}


?>