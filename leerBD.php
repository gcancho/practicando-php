<?php

$servidor = "localhost"; //127.0.0.1
$baseDeDatos = "album";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";
    // Prepara la sentencia
    $sentencia = $conexion->prepare($sql);
    // Ejecuta la sentencia
    $sentencia->execute();
    // Obtengo los resultados
    $resultado = $sentencia->fetchAll();
    //print_r($resultado);

    //la variable $foto puede cambiar su nombre a cualquier otro
    foreach ($resultado as $foto) {
        echo $foto["nombre"] . "<br/>";
    }

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea" . $error;
}
