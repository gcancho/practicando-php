<?php

$jsonContenido = '[
    {"nombre":"Giovanni", "apellido":"Cancho"},
    {"nombre":"Paolo", "apellido":"Guerrero"}]
    ';

$resultado = json_decode($jsonContenido);
// print_r($resultado);

foreach ($resultado as $humano) {
    echo $humano->nombre . " " . $humano->apellido . "<br>";
}
