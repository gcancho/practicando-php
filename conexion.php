<?php

$servidor = "localhost"; //127.0.0.1
$baseDeDatos = "album";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    $conexion->exec($sql);
    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea" . $error;
}
