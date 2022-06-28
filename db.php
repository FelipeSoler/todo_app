<?php

// Datos de conexión
$user = 'root';
$password = '';
$host = 'localhost';
$db = 'todo';

// Cadena de conexión
$conn = new mysqli($host, $user, $password, $db);

// Validar conexión.
if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
};

?>
